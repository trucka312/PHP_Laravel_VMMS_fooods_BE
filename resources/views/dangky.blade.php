<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/front/css/login-page.css">
</head>

<body>
    <div class="main">
        <form action="{{URL::to('/checkdky')}}" method="POST" class="form" id="form-1">
            @csrf
            <h3 class="heading">Thành viên đăng ký</h3>
            <p class="desc">Trở thành thành viên của VMMS để nhận vô vàn ưu đãi bạn nhé ❤️</p>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="fullname" class="form-label">Tên đầy đủ</label>
                <input id="fullname" name="name" type="text" placeholder="VD: Ngô Như Thảo" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="text" placeholder="VD: thaongo@dgmail.com" class="form-control">
                <span class="form-message"></span>
            </div>
            <!-- <div class="form-group">
            </div>  <label for="email" class="form-label">Avaterar<label>
            <input style="height : 50px;"   type="file" name="avatar" placeholder="Chọn ảnh" onchange="getImg(this)" class="file_input"> <br>
            <span class="form-message"></span> -->

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
                <span class="form-message"></span>
            </div>

            <button class="form-submit">Đăng ký</button>

            <div class="spacer"></div>
            <p>Đã có tài khoản? <a href="{{URL::to('/dangnhap')}}">đăng nhập</a></p>
        </form>
    </div>

    <!-- validate form -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mong muốn của chúng ta
            Validator({
                form: '#form-1',
                formGroupSelector: '.form-group',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
                    Validator.isEmail('#email'),
                    Validator.minLength('#password', 6),
                    Validator.isRequired('#password_confirmation'),
                    Validator.isConfirmed('#password_confirmation', function() {
                        return document.querySelector('#form-1 #password').value;
                    }, 'Mật khẩu nhập lại không chính xác')
                ],
                onSubmit: function(data) {
                    // Call API
                    console.log(data);
                }
            });


            Validator({
                form: '#form-2',
                formGroupSelector: '.form-group',
                errorSelector: '.form-message',
                rules: [
                    Validator.isEmail('#email'),
                    Validator.minLength('#password', 6),
                ],
                onSubmit: function(data) {
                    // Call API
                    console.log(data);
                }
            });
        });

        // Đối tượng `Validator`
        function Validator(options) {
            function getParent(element, selector) {
                while (element.parentElement) {
                    if (element.parentElement.matches(selector)) {
                        return element.parentElement;
                    }
                    element = element.parentElement;
                }
            }

            var selectorRules = {};

            // Hàm thực hiện validate
            function validate(inputElement, rule) {
                var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
                var errorMessage;

                // Lấy ra các rules của selector
                var rules = selectorRules[rule.selector];

                // Lặp qua từng rule & kiểm tra
                // Nếu có lỗi thì dừng việc kiểm
                for (var i = 0; i < rules.length; ++i) {
                    switch (inputElement.type) {
                        case 'radio':
                        case 'checkbox':
                            errorMessage = rules[i](
                                formElement.querySelector(rule.selector + ':checked')
                            );
                            break;
                        default:
                            errorMessage = rules[i](inputElement.value);
                    }
                    if (errorMessage) break;
                }

                if (errorMessage) {
                    errorElement.innerText = errorMessage;
                    getParent(inputElement, options.formGroupSelector).classList.add('invalid');
                } else {
                    errorElement.innerText = '';
                    getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
                }

                return !errorMessage;
            }

            // Lấy element của form cần validate
            var formElement = document.querySelector(options.form);
            if (formElement) {
                // Khi submit form
                formElement.onsubmit = function(e) {
                    e.preventDefault();

                    var isFormValid = true;

                    // Lặp qua từng rules và validate
                    options.rules.forEach(function(rule) {
                        var inputElement = formElement.querySelector(rule.selector);
                        var isValid = validate(inputElement, rule);
                        if (!isValid) {
                            isFormValid = false;
                        }
                    });

                    if (isFormValid) {
                        // Trường hợp submit với javascript
                        if (typeof options.onSubmit === 'function') {
                            var enableInputs = formElement.querySelectorAll('[name]');
                            var formValues = Array.from(enableInputs).reduce(function(values, input) {

                                switch (input.type) {
                                    case 'radio':
                                        values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                                        break;
                                    case 'checkbox':
                                        if (!input.matches(':checked')) {
                                            values[input.name] = '';
                                            return values;
                                        }
                                        if (!Array.isArray(values[input.name])) {
                                            values[input.name] = [];
                                        }
                                        values[input.name].push(input.value);
                                        break;
                                    case 'file':
                                        values[input.name] = input.files;
                                        break;
                                    default:
                                        values[input.name] = input.value;
                                }

                                return values;
                            }, {});
                            options.onSubmit(formValues);
                        }
                        // Trường hợp submit với hành vi mặc định
                        else {
                            formElement.submit();
                        }
                    }
                }

                // Lặp qua mỗi rule và xử lý (lắng nghe sự kiện blur, input, ...)
                options.rules.forEach(function(rule) {

                    // Lưu lại các rules cho mỗi input
                    if (Array.isArray(selectorRules[rule.selector])) {
                        selectorRules[rule.selector].push(rule.test);
                    } else {
                        selectorRules[rule.selector] = [rule.test];
                    }

                    var inputElements = formElement.querySelectorAll(rule.selector);

                    Array.from(inputElements).forEach(function(inputElement) {
                        // Xử lý trường hợp blur khỏi input
                        inputElement.onblur = function() {
                            validate(inputElement, rule);
                        }

                        // Xử lý mỗi khi người dùng nhập vào input
                        inputElement.oninput = function() {
                            var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
                            errorElement.innerText = '';
                            getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
                        }
                    });
                });
            }

        }



        // Định nghĩa rules
        // Nguyên tắc của các rules:
        // 1. Khi có lỗi => Trả ra message lỗi
        // 2. Khi hợp lệ => Không trả ra cái gì cả (undefined)
        Validator.isRequired = function(selector, message) {
            return {
                selector: selector,
                test: function(value) {
                    return value ? undefined : message || 'Vui lòng nhập trường này'
                }
            };
        }

        Validator.isEmail = function(selector, message) {
            return {
                selector: selector,
                test: function(value) {
                    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    return regex.test(value) ? undefined : message || 'Trường này phải là email';
                }
            };
        }

        Validator.minLength = function(selector, min, message) {
            return {
                selector: selector,
                test: function(value) {
                    return value.length >= min ? undefined : message || `Vui lòng nhập tối thiểu ${min} kí tự`;
                }
            };
        }

        Validator.isConfirmed = function(selector, getConfirmValue, message) {
            return {
                selector: selector,
                test: function(value) {
                    return value === getConfirmValue() ? undefined : message || 'Giá trị nhập vào không chính xác';
                }
            }
        }
    </script>
    <script>
        document.getElementById('form-1').addEventListener('submit', function(e) {
            e.preventDefault(); // Ngăn chặn hành vi mặc định của trình duyệt
            this.submit(); // Gửi biểu mẫu bằng phương thức POST
        });
    </script>
</body>

</html>