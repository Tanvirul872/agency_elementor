// contact form
// jQuery(document).ready(function ($) {
//   $(document).ready(function () {
//     // Attach a submit handler to the form
//     $("#contact-form").submit(function (event) {
//       // Prevent the default form submission
//       event.preventDefault();

//       var ajax_url = jQuery(this).attr("ajax_url");
//       // alert(ajax_url);

//       var form = jQuery("#contact-form").serialize();

//       // alert('kamrul 12');
//       // alert(form);

//       var formdata = new FormData();
//       formdata.append("action", "get_contact_data");
//       formdata.append("get_contact_data", form);

//       alert(formdata);

//       jQuery.ajax(ajax_url, {
//         type: "POST",
//         data: formdata,
//         processData: false,
//         contentType: false,

//         success: function (res) {
//           document.getElementById("contact-form").reset();

//           if (res.success === false) {
//             alert("Something Wrong");
//             // alert(ajax_url)
//           } else {
//             alert(res);
//             window.location.href = home_url;
//           }
//         },
//         error: function (err) {},
//       });
//     });
//   });
// });


// contact form
jQuery(document).ready(function ($) {
  $("#contact-form").submit(function (event) {
    event.preventDefault();

    var ajax_url = $("#contact-form").attr("ajax_url");
    var form = $("#contact-form").serialize();

    // alert(ajax_url);
    // alert(form);
    // alert('hello');

    var formdata = new FormData();
    formdata.append("action", "get_contact_data");
    formdata.append("get_contact_data", form);

    alert(ajax_url);
    alert(form);
    alert('hello');

    jQuery.ajax({
      type: "POST",
      url: ajax_url, // Use "url" instead of the second parameter
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {
        document.getElementById("contact-form").reset();

          if (res.success === false) {
            alert("Something Wrong");
          } else {
            alert(res);
            window.location.href = home_url;
          }
      },
      error: function (err) {
        // Your error handling code
      },
    });
  });
});
