
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">

            <p>Please fill the information below to register as a researcher</p>

            <form action="{{ route('registerresearcher') }}" method="post">
                @csrf
                <div class>
                    <input type="text" name="name" id="name" placeholder="Your Name" class="form-control form-width @error('name') border border-danger @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <input type="text" name="username" id="username" placeholder="Username" class="form-control form-width @error('username') border border-danger @enderror" value="{{ old('username') }}">
                    @error('username')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <input type="text" name="email" id="email" placeholder="Your email" class="form-control form-width @error('username') border border-danger @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="form-control form-width @error('password') border border-danger @enderror" value="">
                    @error('password')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class = "mb-3">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="form-control form-width @error('password_confirmation') border border-danger @enderror" value="">
                    @error('password_confirmation')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div >
                    <button type="submit" class="btn btn-primary btn-block mb-3" style="width: 300px!important;">Register</button>
                </div>
            </form>
        </div>
    </div>
