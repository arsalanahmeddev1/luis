@extends('layouts.app')
@section('content')
    <div class="contact-us-banner">
        <div class="container container-c">
            <div class="row contact-book-wrapper ">
                <div class="col-md-6 pe-0 justify-content-center text-center align-items-center d-none d-md-flex" style="position: relative; z-index: 12;">
                    <div class="contact-right-book">
                        <img src="{{asset('assets/images/Our-Faith.png')}}" alt="" class="logo-img">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="position: relative; z-index:12;">
                    <form action="./new-password.php" class="verification-form" id="form">
                        <div class="verification-area">
                            <h3 class="hd-lg">Verification</h3>
                            <p class="primary-para f-open mb-26">Enter your 4 digits code that you received on your email.</p>
                            <div class="field-wrap">
                                <div class="d-flex align-items-center justify-content-center gap-30">
                                    <input class="otp f-open" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1>
                                    <input class="otp f-open" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1>
                                    <input class="otp f-open" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1>
                                    <input class="otp f-open" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1>
                                </div>
                                <h6 class="timer number text-orange  f-open text-center">00:10</h6>
                                <a href="{{route('new-password')}}" class="nav-btn submit-btn w-100 mb-26 mt-26">VERIFY</a>
                                <h5 class="primary-para f-open text-14 text-center resend">If you didn’t receive a code! <a href="javascript:;" class="text-orange resend-btn">Resend</a></h5>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
             const sleep = ms => new Promise(r => setTimeout(r, ms));
            let inputs = document.querySelectorAll('.otp');

            inputs.forEach((el, index) => {
                el.addEventListener('keyup', e => {
                    let element = e.target
                    digitValidate(element)
                    tabChange(element, index)
                })
            })


            function digitValidate(ele) {
                ele.value = ele.value.replace(/[^0-9]/g, '');
            }

            function tabChange(element, index) {
                if (element.value.length > 0) {
                    if (index < 3) {
                        inputs[index + 1].focus()
                    } else {
                        inputs[index].blur()
                        document.querySelector('#form').submit()
                    }
                }
            }

            async function sendOTP() {

                let element = document.querySelector('.number')
                let resend = document.querySelector('.resend')
                element.classList.remove('d-none')
                resend.classList.add('d-none')
                if (await setCounter(element)) {
                    element.classList.add('d-none')
                    resend.classList.remove('d-none')
                }
            }

            document.querySelector('.resend-btn').addEventListener('click', () => {
                sendOTP()
            })

            async function setCounter(element) {
                let count = 10

                while (count > 0) {
                    element.innerHTML = "00:" + (count < 10 ? '0' + count : count)
                    await sleep(1000)

                    count--
                }

                return true
            }
            sendOTP()
        </script>


@endsection
