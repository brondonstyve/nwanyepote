<x-layouts.base>
    {{-- If the user is authenticated --}}
    @auth()
        {{-- If the user is authenticated on the static sign up or the sign up page --}}
        @if (in_array(request()->route()->getName(),['static-sign-up', 'sign-up'],))
            @include('backend.layouts.navbars.guest.sign-up')
            {{ $slot }}
            @include('backend.layouts.footers.guest.with-socials')
            {{-- If the user is authenticated on the static sign in or the login page --}}
        @elseif (in_array(request()->route()->getName(),['sign-in', 'login-admin'],))
            @include('backend.layouts.navbars.guest.login')
            {{ $slot }}
            @include('backend.layouts.footers.guest.description')
        @elseif (in_array(request()->route()->getName(),['profile', 'my-profile'],))
            @include('backend.layouts.navbars.auth.sidebar')
            <div class="main-content position-relative bg-gray-100">
                @include('backend.layouts.navbars.auth.nav-profile')
                <div>
                    {{ $slot }}
                    @include('backend.layouts.footers.auth.footer')
                </div>
            </div>
            @include('backend.components.plugins.fixed-plugin')
        @else
            @include('backend.layouts.navbars.auth.sidebar')
            @include('backend.layouts.navbars.auth.nav')
            @include('backend.components.plugins.fixed-plugin')
            {{ $slot }}
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @include('backend.layouts.footers.auth.footer')
                    </div>
                </div>
            </main>
        @endif
    @endauth

    {{-- If the user is not authenticated (if the user is a guest) --}}
    @guest
        {{-- If the user is on the login page --}}
        @if (!auth()->check() && in_array(request()->route()->getName(),['login-admin'],))
            @include('backend.layouts.navbars.guest.login')
            {{ $slot }}
            <div class="mt-5">
                @include('backend.layouts.footers.guest.with-socials')
            </div>

            {{-- If the user is on the sign up page --}}
        @elseif (!auth()->check() && in_array(request()->route()->getName(),['sign-up'],))
            <div>
                @include('backend.layouts.navbars.guest.sign-up')
                {{ $slot }}
                @include('backend.layouts.footers.guest.with-socials')
            </div>
        @endif
    @endguest

</x-layouts.base>
