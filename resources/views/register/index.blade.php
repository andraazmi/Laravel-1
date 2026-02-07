@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registraytion Form</h1>
                <form>
                    {{-- Name --}}
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name" />
                        <label for="name">Name</label>
                    </div>
                    {{-- Username --}}
                    <div class="form-floating">
                        <input type="text" name="usernam" class="form-control" id="username" placeholder="Username" />
                        <label for="username">Name</label>
                    </div>
                    {{-- Email --}}
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@.com" />
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="password"
                            placeholder="Password" />
                        <label for="password">Password</label>
                    </div>
                    <button mt-5 class="w-100 btn btn-primary mt-4" type="submit">
                        Login
                    </button>
                </form>
                <small class="d-block text-center mt-3">
                    Already Register? <a href="/register">Login Now!</a>
                </small>
            </main>
        </div>
    </div>



@endsection