
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
  	    if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            $('.invalid-user').addClass('invisible');
            var ele = form.getElementsByClassName("form-control");
            for (var i = 0; i < ele.length; i++) {
                var msg = "",
                    reason = ele[i].validity;
                    console.log(reason)
                if (reason.valueMissing) {
                    msg = ele[i].getAttribute("data-value-missing");
                } else if (reason.patternMismatch) {
                    msg = ele[i].getAttribute("data-pattern-mismatch");
                } else if (reason.customError) {
                    msg = ele[i].getAttribute("data-password-mismatch");
                } else if (reason.typeMismatch) {
                    msg = ele[i].getAttribute("data-type-mismatch");
                } else if (reason.tooShort) {
                    msg = ele[i].getAttribute("data-tooshort");
                } else {
                    msg = "";
                }
                $(ele[i]).closest('.row').find('.invalid-feedback').text(msg).css('display','block');

            }
            form.classList.add('was-validated');
        }
      }, false);
    });
  }, false);
})();
