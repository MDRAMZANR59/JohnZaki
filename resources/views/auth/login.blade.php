{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('frontend.app')
@section('title')
Sign in
@endsection
@section('content')
 <!-- heading part start -->
 <header class="bi-auth-header">
    <div class="container bi-logo-container">
      <a href="{{route('home')}}" class="bi-auth-logo">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="109"
          height="69"
          viewBox="0 0 109 69"
          fill="none"
        >
          <path
            d="M58.8086 24.1771C58.7421 28.1149 58.227 33.2325 56.2664 38.1174C56.1003 38.5162 56.067 39.1476 55.6018 39.1642C55.1698 39.1808 55.0203 38.566 54.8043 38.2005C54.1064 37.0872 53.9901 36.0239 54.4387 34.6946C55.3858 31.8866 55.7015 28.9291 55.9009 25.9716C56.2332 21.0202 55.8344 16.1352 54.5716 11.3334C54.04 9.33955 53.3587 7.42878 52.0627 5.76724C50.7003 4.02263 49.4707 4.00601 48.1083 5.76724C46.4633 7.8774 45.7655 10.3863 45.184 12.9285C44.3033 16.75 44.0707 20.6546 44.2036 24.5592C44.3532 28.9789 44.9181 33.3322 46.6627 37.4362C47.1446 38.5992 47.776 39.6792 48.6898 40.5432C49.5538 41.3574 50.019 41.4239 51.0658 40.8589C51.448 40.6429 51.6307 40.6928 51.8633 41.0583C52.1458 41.5069 52.4615 41.9223 52.8104 42.3211C53.176 42.7199 53.0929 42.9525 52.6775 43.2349C50.6338 44.6306 48.0916 44.2152 46.2806 42.1549C44.536 40.1777 43.5889 37.7685 42.9243 35.2762C41.08 28.3808 40.864 21.4189 42.0436 14.3906C42.5753 11.1839 43.4061 8.06017 45.0677 5.21894C46.0812 3.50755 47.3606 2.06201 49.4375 1.69647C50.9495 1.43063 52.2289 1.99555 53.3089 2.97586C55.2529 4.73709 56.2332 7.06324 56.9643 9.48909C58.3433 14.0749 58.8086 17.7802 58.8086 24.1771Z"
            fill="black"
          />
          <path
            d="M65.9695 22.8646C66.0526 27.7994 65.4544 32.6344 63.7762 37.3034C63.0784 39.2474 62.1978 41.075 60.6692 42.5372C58.5922 44.531 55.9172 44.531 53.8569 42.5206C51.9959 40.7261 51.0655 38.4 50.3344 36.024C48.5898 30.3581 48.3073 24.5594 48.7061 18.6941C48.9719 14.8892 49.6366 11.1674 51.0655 7.62828C51.2316 7.21289 51.2649 6.54828 51.7799 6.53166C52.2119 6.51504 52.3282 7.16304 52.5609 7.51197C53.3086 8.6252 53.3418 9.72181 52.8932 11.0344C52.0292 13.56 51.7467 16.2184 51.5141 18.8603C51.1486 22.8812 51.3479 26.8855 52.0126 30.8566C52.5609 34.0467 53.2753 37.2203 55.2858 39.8954C55.4686 40.1446 55.6679 40.3772 55.8839 40.5766C56.8642 41.4738 57.695 41.4738 58.6587 40.56C59.5061 39.7458 60.1042 38.7489 60.5861 37.6855C62.0815 34.296 62.6963 30.707 63.0119 27.0517C63.4273 22.0837 63.1615 17.1489 62.015 12.2972C61.4667 10.0043 60.7689 7.74458 59.2901 5.85043C59.0076 5.48489 58.6753 5.13597 58.3098 4.85351C57.7947 4.43812 57.1467 4.27197 56.615 4.67074C55.9006 5.18581 55.5516 4.91997 55.2526 4.27197C55.2193 4.20551 55.1529 4.13905 55.103 4.07258C54.0729 2.75997 54.1061 2.61043 55.7178 1.96243C57.5289 1.24797 59.6058 1.84612 61.0846 3.54089C62.8292 5.53474 63.7762 7.91074 64.4575 10.4197C65.6538 14.9723 65.9695 17.7803 65.9695 22.8646Z"
            fill="black"
          />
          <path
            d="M86.3214 54.5999C87.5343 54.5999 88.7638 54.5999 89.9768 54.5999C90.0931 54.5999 90.2094 54.683 90.1761 54.7993C90.1429 54.8823 90.0432 54.9987 89.9601 55.0153C88.7638 55.3476 89.1294 56.0787 89.4284 56.8762C90.5417 59.6842 91.6051 62.4922 92.7183 65.3667C93.0672 65.1174 93.1005 64.7685 93.2001 64.486C94.33 61.2959 95.4432 58.1223 96.5564 54.9322C96.6395 54.683 96.6395 54.2676 96.9386 54.2676C97.3041 54.2676 97.2875 54.7162 97.3706 54.9654C98.4838 58.0891 99.5805 61.2294 100.677 64.3697C100.793 64.6854 100.91 64.9845 101.026 65.3002C101.358 65.267 101.342 65.0011 101.408 64.8183C102.455 62.11 103.485 59.3851 104.565 56.6934C104.881 55.8959 104.98 55.331 104 55.0485C103.917 55.0319 103.851 54.9654 103.801 54.9156C103.768 54.8823 103.751 54.8159 103.668 54.6331C104.665 54.5168 105.612 54.5667 106.559 54.5999C106.675 54.5999 106.792 54.683 106.775 54.7993C106.758 54.8823 106.659 55.0153 106.576 55.0319C105.313 55.3143 105.13 56.4276 104.764 57.3913C103.601 60.4153 102.472 63.4393 101.308 66.4633C101.159 66.862 101.092 67.3273 100.577 67.726C99.2481 63.9543 97.9355 60.2325 96.5398 56.278C96.2574 57.0756 96.0414 57.6405 95.842 58.222C94.8451 61.0965 93.8481 63.971 92.8346 66.8454C92.7349 67.1279 92.7183 67.5765 92.4026 67.5931C92.0038 67.6097 92.0204 67.1113 91.9041 66.8288C90.6248 63.4725 89.3288 60.1162 88.0826 56.7433C87.8001 55.979 87.4512 55.3476 86.6204 55.0983C86.4875 55.0485 86.3048 54.982 86.3214 54.5999Z"
            fill="black"
          />
          <path
            d="M10.675 50.2305C15.4437 50.2305 19.099 54.0022 19.0658 58.8871C19.0326 63.7721 15.3606 67.577 10.6584 67.577C5.92305 67.577 2.21782 63.7388 2.23443 58.8207C2.23443 53.9358 5.88982 50.2139 10.675 50.2305ZM17.6867 58.1893C17.7034 57.5081 17.4707 56.2287 16.9557 55.0158C15.8923 52.5733 14.131 50.8785 11.4227 50.5296C8.88058 50.1973 6.82028 51.2441 5.29166 53.2711C3.04858 56.2951 3.03197 61.0305 5.17535 64.1376C7.76735 67.8594 12.5526 68.1585 15.56 64.769C17.072 63.0908 17.6701 61.0638 17.6867 58.1893Z"
            fill="black"
          />
          <path
            d="M37.4755 67.061C36.0798 67.061 34.9167 67.061 33.7204 67.061C33.737 66.9613 33.737 66.8782 33.7703 66.8616C34.7506 66.5459 34.8503 65.8314 34.8337 64.9176C34.7838 61.9268 34.8004 58.9361 34.8337 55.9453C34.8337 55.1976 34.6343 54.8819 33.8367 54.9484C33.0392 55.0148 32.225 54.9816 31.4275 54.965C30.9457 54.9484 30.713 55.0979 30.713 55.6296C30.7297 59.0025 30.7297 62.3754 30.713 65.765C30.713 66.5791 31.494 66.5127 31.8927 67.0277C30.6632 67.0277 29.5333 67.0277 28.3869 67.0277C28.4035 66.7951 28.553 66.7453 28.6693 66.712C29.417 66.4794 29.55 65.9477 29.5333 65.2333C29.5001 62.1927 29.5001 59.1521 29.5333 56.0948C29.5333 55.3305 29.4337 54.8321 28.5198 54.9484C28.4201 54.965 28.3204 54.8985 28.1875 54.8487C28.254 54.749 28.2872 54.6493 28.337 54.6327C29.5167 54.3668 29.5167 54.3668 29.5167 53.1207C29.5167 52.4228 29.55 51.7416 29.766 51.077C30.497 48.8339 32.7235 47.8702 35.249 48.6844C36.5617 49.1164 36.7777 49.5317 36.3457 51.0105C36.2626 50.8942 36.1961 50.8277 36.1463 50.728C35.4484 49.1828 34.3684 48.5514 32.8897 48.8339C31.71 49.0665 30.8127 50.2628 30.7297 51.7416C30.5635 54.5496 30.5635 54.5496 33.3549 54.5496C36.03 54.5496 36.03 54.5496 36.03 57.1914C36.03 59.6505 36.03 62.1262 36.03 64.5853C36.03 66.1637 36.03 66.1637 37.4755 67.061Z"
            fill="black"
          />
          <path
            d="M73.0703 49.9975C73.818 49.4492 74.5325 49.1834 75.2303 48.8677C75.546 48.7182 75.6955 48.9009 75.7288 49.2C75.7454 49.4492 75.7454 49.6985 75.7454 49.9477C75.7454 53.7692 75.7454 57.5908 75.7454 61.3957C75.7454 61.6948 75.7454 61.9939 75.7454 62.2597C76.0445 62.3428 76.1109 62.16 76.2272 62.0603C78.2709 60.0831 80.298 58.0726 82.3583 56.112C82.8734 55.6302 82.8734 55.3643 82.2088 55.0819C82.0592 55.032 81.8931 54.9489 81.8598 54.6499C82.9066 54.6499 83.9534 54.6499 85.0002 54.6499C85.0666 54.9988 84.7842 55.032 84.6014 55.0819C83.7208 55.3311 83.0728 55.9292 82.4414 56.5606C80.9626 58.0228 79.4839 59.4683 77.9719 60.8972C77.5565 61.2794 77.4734 61.512 77.9885 61.8942C79.7663 63.2234 81.5109 64.5859 83.2389 65.9649C83.9035 66.4966 84.7842 66.5631 85.6315 67.1612C83.97 67.1612 82.4912 67.1612 81.0291 67.1612C80.9626 66.8788 81.1786 66.7957 81.3282 66.696C81.6272 66.4634 81.6106 66.2474 81.3282 66.0314C79.8494 64.8683 78.3706 63.7052 76.8752 62.5588C76.4931 62.2763 75.8118 62.7249 75.762 63.3563C75.6955 64.2369 75.7288 65.1175 75.7454 66.0148C75.7454 66.3471 75.9946 66.48 76.2605 66.6129C76.5263 66.7459 76.842 66.7957 77.0746 67.1779C75.7288 67.1779 74.4826 67.1779 73.2198 67.1779C73.2365 67.0948 73.2365 66.9951 73.2531 66.9951C74.5657 66.5963 74.5158 65.5828 74.4992 64.4862C74.466 60.2326 74.4826 55.9625 74.4826 51.7089C74.4992 50.3299 74.4992 50.3299 73.0703 49.9975Z"
            fill="black"
          />
          <path
            d="M64.2304 65.566C62.8015 67.1445 59.0796 68.2577 56.7701 66.6128C55.5904 65.7654 55.2082 64.1205 55.9227 62.8411C56.7036 61.4621 58.0329 60.7808 59.4286 60.1827C60.8242 59.5845 62.303 59.2024 63.7984 58.87C64.3966 58.7371 64.5627 58.5045 64.4464 57.8897C64.0144 55.6134 62.303 54.4836 59.8439 54.8325C58.6809 54.9987 57.7006 55.331 57.4015 56.6436C57.3516 56.8596 57.2686 57.1254 57.0193 57.2417C56.6538 55.9457 56.8532 55.4805 57.9996 54.9488C59.711 54.1347 61.4224 53.9519 63.2002 54.7328C64.7122 55.414 65.4932 56.5771 65.6427 58.2054C65.8421 60.3322 65.7258 62.459 65.7258 64.5857C65.7258 65.5827 65.6095 66.5796 66.9719 66.8953C66.2409 67.211 65.5596 67.078 64.9116 67.0614C64.5793 67.0614 64.5627 66.779 64.5461 66.5131C64.5129 66.1808 64.6624 65.782 64.2802 65.5328C64.4132 65.2337 64.5461 64.9513 64.5461 64.6024C64.5295 63.0239 64.5129 61.4454 64.5461 59.867C64.5627 59.2356 64.2969 59.1857 63.7984 59.302C63.3166 59.4184 62.8181 59.4848 62.3362 59.6177C60.5584 60.1328 58.7473 60.6479 57.4679 62.11C56.0889 63.6885 56.7867 66.131 58.7806 66.7457C60.1929 67.1777 61.5055 66.9119 62.7849 66.2805C63.2667 66.0811 63.6655 65.6657 64.2304 65.566Z"
            fill="black"
          />
          <path
            d="M24.3024 54.8491C24.0698 55.0319 23.8205 54.9654 23.5713 54.9654C22.4249 54.982 22.4249 54.982 22.4249 56.1783C22.4249 59.1691 22.4581 62.1599 22.4082 65.1506C22.3916 65.9482 22.5744 66.4965 23.3885 66.7291C23.5049 66.7623 23.6544 66.8122 23.6544 67.0614C22.4913 67.0614 21.3116 67.0614 20.1485 67.0614C20.1485 66.9949 20.1319 66.9119 20.1485 66.9119C21.2285 66.5962 21.3615 65.8153 21.3449 64.8017C21.2784 61.9605 21.295 59.1026 21.3449 56.2448C21.3615 55.414 21.2784 54.8159 20.2316 54.9488C20.1652 54.9488 20.0987 54.8823 20.0156 54.8491C20.0489 54.7826 20.0489 54.6996 20.0821 54.6996C21.3116 54.3673 21.3116 54.3672 21.3116 52.9716C21.3116 52.5229 21.295 52.0743 21.3615 51.6423C21.6605 49.5156 23.6045 48.1199 25.8476 48.4522C26.3295 48.5186 26.8279 48.6682 27.2932 48.8177C28.7055 49.2829 28.8218 49.4989 28.4562 51.0442C28.2735 51.0442 28.2569 50.878 28.207 50.7617C27.5424 49.2996 26.1633 48.5685 24.6347 48.8509C23.4716 49.0669 22.5744 50.2633 22.4581 51.7586C22.4415 52.0577 22.4415 52.3734 22.4415 52.6725C22.4581 53.2208 22.3085 53.8522 22.5412 54.3008C22.8236 54.8491 23.5547 54.4503 24.0698 54.5833C24.1695 54.6165 24.2858 54.6331 24.3024 54.8491Z"
            fill="black"
          />
          <path
            d="M68.25 50.0141C68.9811 49.5156 69.6623 49.2165 70.3269 48.9175C70.7257 48.7347 70.8918 48.9341 70.8918 49.3162C70.8918 49.5655 70.8918 49.8147 70.8918 50.0639C70.8918 54.8159 70.8918 59.5845 70.8918 64.3365C70.8918 65.3999 70.4765 66.6627 72.3706 66.8787C72.2875 66.9451 72.2045 66.995 72.1214 67.0615C70.9583 67.0615 69.7952 67.0615 68.6155 67.0615C68.6155 67.0116 68.5989 66.9119 68.5989 66.9119C69.6623 66.563 69.6955 65.7488 69.6789 64.8018C69.6457 60.4818 69.6623 56.1784 69.6623 51.8584C69.6955 50.363 69.6955 50.363 68.25 50.0141Z"
            fill="black"
          />
          <path
            d="M47.9608 65.799C46.9473 67.3443 44.5547 67.959 42.4445 67.3277C39.2211 66.364 37.4433 63.0907 38.0581 59.5683C38.8556 54.916 43.7073 52.8224 47.8445 55.2981C48.1602 55.4809 48.4261 55.8464 48.8581 55.4643C49.0408 55.2981 49.1571 55.5307 49.1571 55.6969C49.1571 56.4778 49.2568 57.2754 49.0574 58.2058C48.6919 57.6243 48.4427 57.1424 48.127 56.7104C46.0002 53.703 41.6304 54.052 39.9854 57.3418C38.6396 60.0667 38.9885 63.3732 40.8494 65.3504C42.6107 67.2446 45.2525 67.5603 47.4125 66.148C47.5787 66.015 47.7614 65.9154 47.9608 65.799Z"
            fill="black"
          />
          <path
            d="M54.0403 67.0615C52.8772 67.0615 51.6975 67.0615 50.5344 67.0615C50.5511 66.9784 50.5344 66.8953 50.5511 66.8953C51.6477 66.563 51.764 65.7655 51.7307 64.7686C51.6643 62.3261 51.7141 59.9003 51.7141 57.4578C51.7141 56.112 51.7141 56.112 50.2188 55.8627C51.0661 55.4307 51.7307 55.0984 52.412 54.7827C52.6944 54.6498 52.8107 54.8326 52.8274 55.0984C52.8274 55.3144 52.844 55.547 52.844 55.763C52.844 58.704 52.844 61.6283 52.844 64.5692C52.844 65.5827 52.628 66.6793 54.2563 66.8123C54.1732 66.8953 54.1068 66.9784 54.0403 67.0615Z"
            fill="black"
          />
          <path
            d="M52.8282 51.8412C52.7784 52.3895 52.4793 52.7384 51.931 52.7384C51.3661 52.7384 50.9839 52.4061 51.0005 51.808C51.0171 51.2264 51.3993 50.8941 51.9808 50.9108C52.5291 50.9274 52.8116 51.2929 52.8282 51.8412Z"
            fill="black"
          />
          <path
            d="M36.3127 51.8252C36.2296 52.4067 35.9139 52.7723 35.3324 52.7391C34.8007 52.7058 34.4684 52.3569 34.485 51.8086C34.5016 51.2271 34.8671 50.8781 35.4487 50.9114C35.9804 50.9446 36.2628 51.3101 36.3127 51.8252Z"
            fill="black"
          />
        </svg>
      </a>
      <div class="bi-redirect">
        <a href="{{route('home')}}" class="bi-back-to-website-button"
          >Back To Website</a
        >
      </div>
    </div>
  </header>
  <!-- heading part end -->
<!-- main part start -->
 <main class="bi-auth-page">
    <div class="container bi-auth-form-container">
        <div class="bi-auth-form">
            <div class="bi-auth-form-heading-section">
                <h1 class="bi-auth-heading">Sign In</h1>
                <h3 class="bi-auth-subheading">Welcome back! Sign In to continue.</h3>
              </div>
           
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="bi-input-wrapper">
                    <input type="email" placeholder="Email Address" id="email" name="email" value="{{old('email')}}" />
                    @error('email')
                   <p class="text-danger" > {{$message}}</p>
                    @enderror
                </div>
                <div class="bi-input-wrapper">
                    <input type="password" placeholder="Password" id="password" name="password" value="{{old('password')}}"/>
                    @error('password')
                        <p class="text-danger ">{{$message}}</p>
                    @enderror
                </div>
                <div class="bi-auth-form-other-section">
                    <span>Forget Password?</span><a href="forgetpassword.html">Click Here</a>
                </div>
                <div class="bi-input-wrapper">
                    <button  type="submit">Sign In</button>
                </div>
                <div class="bi-auth-form-other-section">
                    <span>New Here?</span><a href="signup.html">Register Today</a>
                </div>
            </form>
        </div>
    </div>
    <a class="bi-go-back" href="privacy.html">Privacy Policy</a>
 </main>
<!-- main part end -->

 @endsection