@include('master_layout.menu')
@include('master_layout.header')

    <!-- Start Bradcaump area -->
    <section class="inner-header-title" scr="public/asset/img/banner1.jpg">
        <div class="ht__bradcaump__area bg-image--6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Tài Khoản</h2>
                        <nav class="bradcaump-content">
                            <a class="breadcrumb_item" href="{{route('home')}}">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb_item active">Tài Khoản</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="my_account_area pt--80 pb--55 bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="my__account__wrapper">
                        <h3 class="account__title">Đăng Nhập</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="account__form">
                                <div class="input__box">
                                    <label>Tên Đăng Nhập<span>*</span></label>
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input__box">
                                    <label>Mật Khẩu<span>*</span></label>
                                    <input id="password" placeholder="Mật Khẩu" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form__btn">
                                    <button type="submit">Đăng Nhập</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="my__account__wrapper">
                        <h3 class="account__title">Đăng Ký</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="account__form">
                                <div class="input__box">
                                    <label>Tên<span>*</span></label>
                                    <input id="name" placeholder="Họ Và Tên" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input__box">
                                    <label>Email<span>*</span></label>
                                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input__box">
                                    <label>Mật Khẩu<span>*</span></label>
                                    <input id="password" placeholder="Mật Khẩu" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input__box">
                                    <label>Nhập Lại Mật Khẩu<span>*</span></label>
                                    <input id="password-confirm" placeholder="Nhập Lại Mật Khẩu" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                   
                                </div>
                                <div class="form__btn">
                                    <button type="submit">Đăng Ký</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End My Account Area -->

@include('master_layout.footer')
@include('master_layout.script')
