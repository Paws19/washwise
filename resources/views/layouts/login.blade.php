<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log in · WashWise</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="ww-auth">
<a class="visually-hidden-focusable ww-skip" href="#main">Skip to the form</a>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
(() => {
  'use strict';
  const form = document.getElementById('loginForm');
  const controls = [...form.querySelectorAll('input[required]')];

  function validate(input) {
    const ok = input.checkValidity();
    const fb = input.closest('.ww-field').querySelector('.invalid-feedback');
    if (!ok && fb) {
      fb.textContent = input.validity.valueMissing ? input.dataset.msgRequired : input.dataset.msgInvalid;
    }
    input.classList.toggle('is-invalid', !ok);
    return ok;
  }

  controls.forEach((input) => {
    let touched = false;
    input.addEventListener('blur', () => { touched = true; validate(input); });
    input.addEventListener('input', () => { if (touched || input.classList.contains('is-invalid')) validate(input); });
  });

  form.querySelectorAll('[data-toggle-password]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const field = document.getElementById(btn.getAttribute('aria-controls'));
      const show = field.type === 'password';
      field.type = show ? 'text' : 'password';
      btn.setAttribute('aria-pressed', String(show));
      btn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
      btn.querySelector('.ww-eye__on').classList.toggle('d-none', show);
      btn.querySelector('.ww-eye__off').classList.toggle('d-none', !show);
    });
  });

  form.addEventListener('submit', (e) => {
    e.preventDefault(); // no backend yet
    const invalid = controls.filter((input) => !validate(input));
    if (invalid.length) { invalid[0].focus(); return; }
    const done = document.getElementById('formSuccess');
    done.classList.remove('d-none');
    done.focus();
  });
})();
</script>
</body>
</html>