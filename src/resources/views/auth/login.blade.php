
@section('login')
        <div class="container" style="display: flex; flex-direction: column; align-items: center;">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf


                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" class="form-control" style="width: 200px;">

                </div>

                <div class="mb-3">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your password" class="form-control" style="width: 200px;">

                </div>

                <div class="mb-3">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    </div>
                </div>

            </form>
    </div>
@endsection('login')
