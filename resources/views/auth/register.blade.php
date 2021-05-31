@extends('layouts.auth')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text">
                                        <h1 class="h4 text-gray-900 mb-4"
                                            style="font-weight: bold">{{ __('Register Form') }}</h1>
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger border-left-danger" role="alert">
                                            <ul class="pl-4 my-2">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('register') }}" class="user">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <h5>01. Where do you reside</h5>
                                                <div class="mb-4">
                                                    <input type="radio" id="SriLanka" name="q1-a" value="SriLanka">
                                                    <label for="SriLanka">SriLanka</label><br>
                                                    <input type="radio" id="Abroad" name="q1-a" value="Abroad">
                                                    <label for="Abroad">Abroad</label><br>
                                                </div>

                                                <h5>02. Do you have any parents/dependents living in Sri Lanka?</h5>
                                                <div class="mb-4">
                                                    <input type="radio" id="Yes" name="q2-a" value="Yes">
                                                    <label for="Yes">Yes</label><br>
                                                    <input type="radio" id="No" name="q2-a" value="No">
                                                    <label for="No">No</label><br>
                                                </div>

                                                <h5>03. In case of any celebration/parties or religious ceremonies would you consider handing it over to a professional company?</h5>
                                                <div class="mb-4">
                                                    <input type="radio" id="Yes" name="q3-a" value="Yes">
                                                    <label for="Yes">Yes</label><br>
                                                    <input type="radio" id="No" name="q3-a" value="No">
                                                    <label for="No">No</label><br>
                                                    <input type="radio" id="maybe" name="q3-a" value="maybe">
                                                    <label for="maybe">maybe</label><br>
                                                </div>

                                                <h5>04. Would you consider reaching out for a company to take care of your parents/dependents transport matters?</h5>
                                                <div class="mb-4">
                                                    <input type="radio" id="Yes" name="q4-a" value="Yes">
                                                    <label for="Yes">Yes</label><br>
                                                    <input type="radio" id="No" name="q4-a" value="No">
                                                    <label for="No">No</label><br>
                                                    <input type="radio" id="maybe" name="q4-a" value="maybe">
                                                    <label for="maybe">maybe</label><br>
                                                </div>

                                                <h5>05. Will you consider allocating a company to take care of those things for you?
                                                </h5>
                                                <div class="mb-4">
                                                    <input type="radio" id="Yes" name="q5-a" value="Yes">
                                                    <label for="Yes">Yes</label><br>
                                                    <input type="radio" id="No" name="q5-a" value="No">
                                                    <label for="No">No</label><br>
                                                    <input type="radio" id="maybe" name="q5-a" value="maybe">
                                                    <label for="maybe">maybe</label><br>
                                                </div>


                                            </div>

                                            <div class="col-md-6">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user"
                                                           name="name"
                                                           placeholder="{{ __('Name') }}" value="{{ old('name') }}"
                                                           required
                                                           autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user"
                                                           name="last_name" placeholder="{{ __('Last Name') }}"
                                                           value="{{ old('last_name') }}" required>
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-user"
                                                           name="email"
                                                           placeholder="{{ __('E-Mail Address') }}"
                                                           value="{{ old('email') }}" required>
                                                </div>

                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user"
                                                           name="password" placeholder="{{ __('Password') }}" required>
                                                </div>

                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user"
                                                           name="password_confirmation"
                                                           placeholder="{{ __('Confirm Password') }}" required>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>


                                                <hr>

                                                <div class="text-center">
                                                    <a class="small" href="{{ route('login') }}">
                                                        {{ __('Already have an account? Login!') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
