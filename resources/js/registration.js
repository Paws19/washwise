
document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    const form = document.getElementById('registerForm');

    // Stop if this page doesn't contain the registration form
    if (!form) return;

    // Elements
    const password = form.querySelector('#password');
    const confirmPassword = form.querySelector('#password_confirmation');
    const meter = form.querySelector('.ww-meter');
    const hint = form.querySelector('#password-help');
    const strengthLabel = form.querySelector('#strengthLabel');
    const submitBtn = form.querySelector('#submitBtn');

    const controls = [
        ...form.querySelectorAll('input:not([type="hidden"])')
    ].filter(input => input.type !== 'radio');

    // Password strength
    const defaultHint = strengthLabel?.textContent.trim() || '';
    const levels = ['', 'Weak', 'Fair', 'Good', 'Strong'];

    function passwordChecks(value) {
        return {
            length: value.length >= 8,
            mixed: /[a-z]/.test(value) && /[A-Z]/.test(value),
            number: /\d/.test(value),
            symbol: /[^A-Za-z0-9]/.test(value)
        };
    }

    function updatePasswordStrength() {
        if (!password || !meter || !hint || !strengthLabel) return;

        const value = password.value;

        if (!value) {
            meter.dataset.level = '0';
            hint.dataset.level = '0';
            strengthLabel.textContent = defaultHint;
            return;
        }

        const checks = passwordChecks(value);

        let level = Object.values(checks).filter(Boolean).length;

        if (!checks.length) {
            level = Math.min(level, 1);
        }

        level = Math.max(level, 1);

        meter.dataset.level = String(level);
        hint.dataset.level = String(level);

        strengthLabel.textContent =
            `Password strength: ${levels[level]}`;
    }

    // Form validation
    function validate(input) {
        input.setCustomValidity('');

        if (input === password && input.value) {
            const checks = passwordChecks(input.value);

            if (!(checks.length && checks.mixed && checks.number)) {
                input.setCustomValidity(
                    'Use 8+ characters with upper and lower case letters and a number.'
                );
            }
        }

        if (
            input === confirmPassword &&
            input.value !== password.value
        ) {
            input.setCustomValidity('Passwords do not match.');
        }

        const valid = input.checkValidity();

        const feedback = input
            .closest('.ww-field')
            ?.querySelector('.invalid-feedback');

        if (!valid && feedback) {
            const validity = input.validity;

            feedback.textContent = validity.customError
                ? input.validationMessage
                : (
                    validity.valueMissing
                        ? input.dataset.msgRequired
                        : input.dataset.msgInvalid
                ) || input.validationMessage;
        }

        input.classList.toggle('is-invalid', !valid);

        input.classList.toggle(
            'is-valid',
            valid && input.type !== 'checkbox' && input.value !== ''
        );

        return valid;
    }

    // Listen for user input
    controls.forEach(input => {
        let touched = false;

        input.addEventListener('blur', () => {
            touched = true;
            validate(input);
        });

        input.addEventListener('input', () => {
            if (input === password) {
                updatePasswordStrength();

                if (confirmPassword.value) {
                    validate(confirmPassword);
                }
            }

            if (touched || input.classList.contains('is-invalid')) {
                validate(input);
            }
        });

        input.addEventListener('change', () => {
            if (input.type === 'checkbox') {
                validate(input);
            }
        });
    });

    // Show / hide password
    form.querySelectorAll('[data-toggle-password]').forEach(button => {
        button.addEventListener('click', () => {
            const field = document.getElementById(
                button.getAttribute('aria-controls')
            );

            if (!field) return;

            const show = field.type === 'password';

            field.type = show ? 'text' : 'password';

            button.setAttribute('aria-pressed', String(show));

            button.setAttribute(
                'aria-label',
                show ? 'Hide password' : 'Show password'
            );

            button.querySelector('.ww-eye__on')
                ?.classList.toggle('d-none', show);

            button.querySelector('.ww-eye__off')
                ?.classList.toggle('d-none', !show);
        });
    });

    // Customer / Laundry Staff description
    const roleDescriptions = {
        customer: 'Place orders and follow your laundry from drop-off to pickup.',
        staff: 'Manage customers, orders and payments for your shop.'
    };

    const roleHelp = document.getElementById('roleHelp');

    const roleRadios = form.querySelectorAll(
        'input[name="role"]'
    );

    function updateRoleDescription() {
        if (!roleHelp) return;

        const selected = form.querySelector(
            'input[name="role"]:checked'
        );

        roleHelp.textContent = selected
            ? roleDescriptions[selected.value] || ''
            : '';
    }

    roleRadios.forEach(radio => {
        radio.addEventListener('change', updateRoleDescription);
    });

    updateRoleDescription();

    // Form submission
    form.addEventListener('submit', event => {
        const invalidInputs = controls.filter(
            input => !validate(input)
        );

        if (invalidInputs.length) {
            event.preventDefault();
            invalidInputs[0].focus();
            return;
        }

        // Demo mode only: remove this when connecting your backend
        event.preventDefault();

        const success = document.getElementById('formSuccess');

        if (success) {
            success.classList.remove('d-none');
            success.focus();

            success.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });
        }
    });

    // Initialize password strength
    updatePasswordStrength();
});
