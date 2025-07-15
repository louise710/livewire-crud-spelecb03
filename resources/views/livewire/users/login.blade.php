<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-primary">Welcome Back</h2>
                        <p class="text-muted">Please enter your credentials</p>
                    </div>
                    
                    <form wire:submit="login" method="post">
                        @csrf
                        
                        @session('success')
                            <div class="alert alert-success alert-dismissible fade show">
                                {{ $value }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endsession
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text" wire:model="name" class="form-control" id="name" placeholder="Enter your username">
                            </div>
                            @error('name') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input type="password" wire:model="password" class="form-control" id="password" placeholder="Enter your password">
                            </div>
                            @error('password') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                        </div>

                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary py-2">
                                <span wire:loading.remove>Login</span>
                                <span wire:loading class="spinner-border spinner-border-sm"></span>
                            </button>
                        </div>
                        
                        <div class="text-center mb-3">
                            <button type="reset" class="btn btn-link text-decoration-none">Clear form</button>
                        </div>
                    </form>

                    <div class="text-center pt-3 border-top">
                        <p class="text-muted">Don't have an account? 
                            <a href="/register" wire:navigate class="text-decoration-none fw-semibold">Register here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>