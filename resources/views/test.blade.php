@extends('layouts.app')

@section('content')

    <div class="container mt-5" style="max-width: 550px">

        <div class="alert alert-danger" id="error" style="display: none;"></div>

        <h3>Add Phone Number</h3>

        <div class="alert alert-success" id="successAuth" style="display: none;"></div>

        <form>
            <label>Phone Number:</label>

            <input type="text" id="number" class="form-control" placeholder="05*******">

            <div id="recaptcha-container"></div>

            <button type="button" class="btn btn-primary mt-3" onclick="sendOTP();">Send OTP</button>
        </form>


        <div class="mb-5 mt-5">
            <h3>Add verification code</h3>

            <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>

            <form>
                <input type="text" id="verification" class="form-control" placeholder="Verification code">
                <button type="button" class="btn btn-danger mt-3" onclick="verify()">Verify code</button>
            </form>
        </div>
    </div>

@endsection

@push('js')

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.4.3/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.4.3/firebase-auth.js"></script>

    <script>
        // Your web app's Firebase configuration
        let firebaseConfig = {
            apiKey: "AIzaSyB6MYPg0Q25v-ECm3useCxMggDE9fFnYfw",
            authDomain: "test-49dc8.firebaseapp.com",
            databaseURL: "https://test-49dc8.firebaseio.com",
            projectId: "test-49dc8",
            storageBucket: "test-49dc8.appspot.com",
            messagingSenderId: "417770346333",
            appId: "1:417770346333:web:ae5534c2acf6226f3bfab4"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        window.onload = function () {
            render();
        };

        function render() {
            window.recaptchaVerifier = new firebase.default.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }

        function sendOTP() {
            var number = $("#number").val();
            firebase.auth().signInWithPhoneNumber('+213'+number, window.recaptchaVerifier).then(function (confirmationResult) {
                window.confirmationResult = confirmationResult;
                coderesult = confirmationResult;
                console.log(coderesult);
                $("#successAuth").text("Message sent");
                $("#successAuth").show();
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }

        function verify() {
            var code = $("#verification").val();
            coderesult.confirm(code).then(function (result) {
                var user = result.user;
                console.log(user);
                $("#successOtpAuth").text("Auth is successful");
                $("#successOtpAuth").show();
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }
    </script>
@endpush
