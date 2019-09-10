$(function(){
    $("#admin_table").DataTable();
  $("input").attr("autocomplete","off");
  initMap();

  var previousScroll = 0;

  $(window).scroll(function(){

    var currentScroll = $(this).scrollTop();

    if (currentScroll > 0 && currentScroll < $(document).height() - $(window).height()){

      if (currentScroll > previousScroll){
        window.setTimeout(hideNav, 300);

        // } else if (currentScroll == previousScroll) {
        //   window.setTimeout(visibleNav, 300);
      }
      else {
        window.setTimeout(showNav, 300);
      }

      previousScroll = currentScroll;
    }

    /* make the scroll navigation disappear when it is scrolled on top */

    if ($(window).scrollTop() <= 150) {
      $('#navigation-scroll').css('display', 'none');
    } else {
      $('#navigation-scroll').css('display', 'flex');
    }

  });

  //EDIT PROFILE
  //selected specialization
  $("select[name='specialization']").val($("#specialization_selected").val())
  //END EDIT PROFILE


  //HOME
  $("select[name='month']").val($("#selected_month").val())
  $("select[name='user']").val($("#selected_user").val())
  $("select[name='top5_month']").val($("#selected_top5").val())
  $("select[name='specialization_month']").val($("#selected_specialization").val())
  $("select[name='breakdown_month']").val($("#selected_breakdown").val())

  //ENDHOME


  //SEARCH INFO
  $(".showMoreInfoModal").on('click',function(e){
    var modal = $("#moreInfoModal");
    var id = $(this).data('info');
    var eventBtn = $(this);
    $.ajax({
      url:'/search/'+id,
      type:'get',
      success:function(response){
        manipulateModalInfoResults(response,eventBtn);
      },
      error: function(response){
        alert("Something is wrong. Please try again.");
      }
    });
    modal.modal('show');
  });
  if($("#disease-list").length){

    $.ajax({
      url: '/disease',
      type:'get',
      success:function(response){
        addDiseaseList(response);
      },
      error:function(response){
      }

    })
  }

  //SEARCH INFO
  $(".patientDetailsModal").on('click',function(e){
    var id = $(this).data('id');
    var href = "/refer/details?id="+id;
    $("#patientDetailsModal").find('.modal-body').load(href);
    $("#patientDetailsModal").modal('show');
  });


  $("#patientDetailsModal").on('hidden.bs.modal',function(e){
    $(this).find('.modal-body').empty();
  });

  if($("#my-referrals-row").length){

    $(".status-Accepted").addClass("bg-success");
    $(".status-Declined").addClass("bg-danger");

  }

  $(".referAgainModal").on('click',function(e){
    var id = $(this).data('id');
    var modal = $("#referAgainModal");
    modal.find("#doctor-link").attr("href",'/search/doctor?client='+id);
    modal.find("#hospital-link").attr("href",'/search/hospital?client='+id);
    modal.modal('show');
  });


  $(".moreDetailsModal").on('click',function(e){
    var id = $(this).data('id');
    var modal = $("#moreDetailsModal");

    var href = "/hospital/"+id;

    modal.find('.modal-body').load(href);
    modal.modal('show');
  });
  // $(".patientDetailsModal").on('click',function(e){
  //   var modal = $("#patientDetailsModal");
  //   var id = $(this).data('id');
  //   $.ajax({
  //     url:'/refer/'+id,
  //     type:'get',
  //     success:function(response){
  //       console.log(response);
  //
  //       manipulateModalPatientInfo(response);
  //     },
  //     error: function(response){
  //       alert("Something is wrong. Please try again.");
  //     }
  //   });
  //   modal.modal('show');
  // });
  //
  // if($("#my-referrals-row").length){
  //
  //   $(".status-Accepted").addClass("bg-success");
  //   $(".status-Declined").addClass("bg-danger");
  //
  // }
  var table = $('.datatable');
  table.DataTable({
    dom: 'Bfrtip',
    buttons: [
      {
        extend: 'pdfHtml5',
        title: table.data('title')+' - '+moment().format('YYYYMMDDHmm'),
        exportOptions: {
          columns: "thead th:not(.noExport)"
        },
        orientation: 'landscape',

      }
    ],
    "aaSorting": [],
    "bSort" : false
  });


  $.urlParam = function (name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)')
    .exec(window.location.search);

    return (results !== null) ? results[1] || 0 : '';
  }

  if($("#month-disease")){
    var query = $.urlParam('month');
    $("#month-disease").val(query);
  }

  $("#referExisting").on('click',function(){
    var value = $(this).data('id');
    $("#myModal").find('form').attr('href','/refer/create?id='+value);
    $("#myModal").find('#id').val(value);
  });
});


function manipulateModalInfoResults(data,item){
  var modal = $("#moreInfoModal");

  modal.find("#imgTxt").attr('src','/'+data.avatar);
  modal.find("#nameTxt").html(data.name);
  modal.find("#specializationTxt").html(data.specialization);
  modal.find("#addressTxt").html(data.address);
  modal.find("#mobileNumberTxt").html(data.contact_number);
  modal.find("#descriptionTxt").html(data.summary);
  modal.find("#license_number").html(data.license_number);
  //specialization
  if(data.schedule.length > 0){
    modal.find("#referButton").attr('href','/refer/create?id='+data.id).removeClass("disableTab");
    modal.find("#referExisting").data('id',data.id).removeClass("disableTab");
  }else{
    modal.find("#referButton").addClass("disableTab");
    modal.find("#referExisting").addClass("disableTab");
  }

  if (typeof item.data('client') !== 'undefined')
  {
    $("#referAgainDiv").show();
    $("#referAgainDiv").find("#referAgain-form").attr("action",'/refer/'+item.data('client'));
    $("#referAgainDiv").find("#hospitalId").val(data.id);
    $("#referButton").hide();
  }


  $.each(data.schedule, function(index, sched) {

    var weekdays = ['','monday','tuesday','wednesday','thursday','friday','saturday','sunday'];
    var titles = ['Clinic/Hospital','Address','Schedule','Contact Number'];
    var schedules = moment(sched.schedule.from, ["HH:mm"]).format('hh:mm A')+" - "+ moment(sched.schedule.to,["HH:mm"]).format('hh:mm A');

    var inputs = [sched.hospital,sched.address,schedules,sched.contact_number];
    if(index == 0){
      var tab = $("<div/>",{'class':'tab-pane fade show active','id':weekdays[sched.day],'role':'tabpanel','aria-labelledby':weekdays[sched.day]+'-tab'});
    }else{
      var tab = $("<div/>",{'class':'tab-pane fade show','id':weekdays[sched.day],'role':'tabpanel','aria-labelledby':weekdays[sched.day]+'-tab'});
    }

    for(var i = 0; i < titles.length; i++){

      var formGroup = $("<div/>",{'class':'form-group'}).appendTo(tab);
      var label = $("<label/>",{'class':'col-lg-3 control-label font-weight-bold'}).html(titles[i]).appendTo(formGroup);
      var div = $("<div/>",{'class':'col-lg-8'}).appendTo(formGroup);
      var p = $("<p/>").text(inputs[i]).appendTo(div);
    }


    modal.find("#myTabContent").append(tab);
    $("#myTab").find("#"+weekdays[sched.day]+"-tab").removeClass("disableTab");

  });

  $("#myTab .nav-link:not('.disableTab'):first").addClass("active");
}


$('#moreInfoModal').on('hidden.bs.modal', function () {

  $(this).find("#myTabContent").empty();
  $(this).find("#myTab .nav-link").removeClass("active");
});

$("#top5_month,#specialization_month,#breakdown_month").on("change",function(){
  var value = $(this).val();
  var param = $(this).attr('name');
  location.href = URL_add_parameter(location.href, param, value);
});


function URL_add_parameter(url, param, value){
    var hash       = {};
    var parser     = document.createElement('a');

    parser.href    = url;

    var parameters = parser.search.split(/\?|&/);

    for(var i=0; i < parameters.length; i++) {
        if(!parameters[i])
            continue;

        var ary      = parameters[i].split('=');
        hash[ary[0]] = ary[1];
    }

    hash[param] = value;

    var list = [];
    Object.keys(hash).forEach(function (key) {
        list.push(key + '=' + hash[key]);
    });

    parser.search = '?' + list.join('&');
    return parser.href;
}

function initMap() {
  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    var geocoder= new google.maps.Geocoder();

    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      geocoder.geocode({'location': pos}, function(results, status) {
        if (status === 'OK') {
          $('.search-link').each(function(i, obj) {
            var href = $(this).attr('href');
            $(this).attr('href', href+'?location='+results[0].address_components[3].long_name)
          });


        } else {
          window.alert('Geocoder failed due to: ' + status);
        }
      });
    });
  }
}




function manipulateModalPatientInfo(data){
  var modal = $("#patientDetailsModal");

  modal.find("#nameTxt").html(data.patient.name);
  modal.find("#birthdayTxt").html(data.patient.birthday);
  modal.find("#mobileNumberTxt").html(data.patient.mobile_number);
  modal.find("#emailTxt").html(data.patient.email_address);
  modal.find("#descriptionTxt").html(data.report);

  $("#attachments").empty();

  var div = $("#attachments");

  for(var i = 0; i< data.attachments.length; i++){
    div.append($("<li/>").html('<a href="/attachment/'+data.attachments[i].id+'">Attachment #'+(i+1)+'</a>'));
  }
}

function addDiseaseList(data){
  var select = $("#disease-list");
  $.each(data, function(index, value) {
    select.append($('<option>', {
      value: value.id,
      text : value.title
    }));
  });
}


function hideNav() {
  $(".main-navigation-scroll").removeClass("is-visible").addClass("is-hidden");
}
function showNav() {
  $(".main-navigation-scroll").removeClass("is-hidden").addClass("is-visible");
  $(".main-navigation-scroll").addClass("shadow");
}

$("#radio_others").click(function() {
  if ($("#otherForm").attr('disabled')) {
    $("#otherForm").removeAttr('disabled');
  }
});
$(".radio_common").click(function() {
  $("#otherForm").attr({
    'disabled': 'disabled'
  });

});
