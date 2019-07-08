$(function(){



  var previousScroll = 0;

  $(window).scroll(function(){

    var currentScroll = $(this).scrollTop();

    if (currentScroll > 0 && currentScroll < $(document).height() - $(window).height()){

      if (currentScroll > previousScroll){
        window.setTimeout(hideNav, 300);

      } else if (currentScroll == previousScroll) {
        window.setTimeout(visibleNav, 300);
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


  //SEARCH INFO
  $(".showMoreInfoModal").on('click',function(e){
    var modal = $("#moreInfoModal");
    console.log('hey');
    var id = $(this).data('info');
    $.ajax({
      url:'/search/'+id,
      type:'get',
      success:function(response){
        manipulateModalInfoResults(response);
      },
      error: function(response){
        alert("Something is wrong. Please try again.");
      }
    });
    modal.modal('show');
  });

  //SEARCH INFO
  $(".patientDetailsModal").on('click',function(e){
    var modal = $("#patientDetailsModal");
    var id = $(this).data('id');
    $.ajax({
      url:'/refer/'+id,
      type:'get',
      success:function(response){
        console.log(response);

        manipulateModalPatientInfo(response);
      },
      error: function(response){
        alert("Something is wrong. Please try again.");
      }
    });
    modal.modal('show');
  });

  if($("#my-referrals-row").length){

    $(".status-Accepted").addClass("bg-success");
    $(".status-Declined").addClass("bg-danger");

  }
});

function manipulateModalInfoResults(data){
  var modal = $("#moreInfoModal");

  modal.find("#imgTxt").attr('src','/'+data.avatar);
  modal.find("#nameTxt").html(data.name);
  modal.find("#specializationTxt").html(data.specialization);
  modal.find("#addressTxt").html(data.address);
  modal.find("#mobileNumberTxt").html(data.contact_number);
  modal.find("#descriptionTxt").html(data.summary);

  //specialization
  $.each(data.schedule, function(index, sched) {
    modal.find("#referButton").attr('href','/refer/create?id='+data.id);

    var weekdays = ['','monday','tuesday','wednesday','thursday','friday','saturday','sunday'];
    var titles = ['Clinic/Hospital','Address','Schedule','Contact Number'];
    var inputs = [sched.hospital,sched.address,sched.schedule,sched.contact_number];

    var tab = $("<div/>",{'class':'tab-pane fade show active','id':weekdays[sched.day],'role':'tabpanel','aria-labelledby':weekdays[sched.day]+'-tab'});

    for(var i = 0; i < titles.length; i++){

      var formGroup = $("<div/>",{'class':'form-group'}).appendTo(tab);
      var label = $("<label/>",{'class':'col-lg-3 control-label font-weight-bold'}).html(titles[i]).appendTo(formGroup);
      var div = $("<div/>",{'class':'col-lg-8'}).appendTo(formGroup);
      var p = $("<p/>").text(inputs[i]).appendTo(div);
    }

    modal.find("#myTabContent").empty().append(tab);

  });
}

function manipulateModalPatientInfo(data){
  var modal = $("#patientDetailsModal");

  modal.find("#nameTxt").html(data.patient.name);
  modal.find("#birthdayTxt").html(data.patient.birthday);
  modal.find("#mobileNumberTxt").html(data.patient.mobile_number);
  modal.find("#emailTxt").html(data.patient.email_address);
  modal.find("#descriptionTxt").html(data.report);

  var div = $("#attachments");

  for(var i = 0; i< data.attachments.length; i++){
    div.append($("<li/>").html('<a target="_blank" href="attachment/'+data.attachments[i].id+'">Attachment #'+(i+1)+'</a>'));
  }
}


function hideNav() {
  $(".main-navigation-scroll").removeClass("is-visible").addClass("is-hidden");
}
function showNav() {
  $(".main-navigation-scroll").removeClass("is-hidden").addClass("is-visible");
  $(".main-navigation-scroll").addClass("shadow");
}
