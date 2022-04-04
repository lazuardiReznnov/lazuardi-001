@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">

            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

            <form>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" id="name" placeholder="name" name="name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="username" placeholder="username" name="username">
                    <label for="username">username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom" id="password"laceholder="Password" name="password">
                    <label for="password">Password</label>
                </div>
          
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
           
            </form>
            <small class="d-block text-center mt-3">Already Resgistered.? <a href="/login">Login!</a> </small>
          </main>
    </div>
</div>

@endSection