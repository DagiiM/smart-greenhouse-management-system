
<x-guest-layout>

  <div class=" flex items-center justify-center" style="background: #edf2f7;">

  <form method="POST" action="{{ route('users.store') }}">
          @csrf
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div  style="margin:2px 0 12px 40%;">
     <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
  </div>

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

<p class="text-grey-dark text-xs italic">Fill the fields below and Create an Account Within no time. Karibu {{config('app.name')}}</p>
<div class="-mx-3 md:flex mb-3">

  <div class="md:w-1/2 px-3 mb-3 md:mb-0">
    <input name="firstname" class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="First Name e.g. Douglas" required>

  </div>
  <div class="md:w-1/2 px-3">
    <input name="lastname" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Last Name e.g. Kobia" required>
  </div>
</div>

<p class="text-grey-dark text-xs italic">How Can We Reach You?</p>
<div class="-mx-3 md:flex mb-3">
  <div class="md:w-full px-3">
    <input name="mobile" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-mobile" type="tel" placeholder="Mobile Number e.g. 0799115309" required>
  </div>
<div class="md:w-full px-3">
  <input name="email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-email" type="email" placeholder="Email e.g. elesoltd@gmail.com" required>
</div>


  <div class="md:w-full px-3">
    <select name="gender" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state" required>
      <option>Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>
    </div>

</div>

<div class="-mx-3 md:flex mb-2">
  <div class="md:w-1/4 px-3">
      <select name="country" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state" required>
        <option>Country</option>
        <option value="Kenya">Kenya</option>
        <option value="Uganda">Uganda</option>
        <option value="Tanzania">Tanzania</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Somalia">Somalia</option>
        <option value="Rwanda">Rwanda</option>
      </select>
  </div>

    <div class="md:w-1/4 px-3">
      <select name="city" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-city" required>
        <option>City/Town</option>
        <option value="Machakos">Machakos</option>
        <option value="Nairobi">Nairobi</option>
        <option value="Mombasa">Mombasa</option>
      </select>
      </div>

  <div class="md:w-1/4 px-3">
    <input name="address" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="text" placeholder="Postal Address e.g. 136" value="136" required>
  </div>

  <div class="md:w-1/4 px-3">
    <input name="postal_code" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="text" placeholder="Postal Code e.g. 90100" value="90100" required>
  </div>

</div>

<div class="-mx-3 md:flex mb-3">
    <div class="md:w-full px-3">
  <input name="bio" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-bio" type="text" placeholder="Bio e.g. About You" required>
</div>
</div>
<p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
<div class="-mx-3 md:flex mb-3">
  <div class="md:w-full px-3">
    <input name="password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="password" placeholder="Enter Password" required>

  </div>

  <div class="md:w-full px-3">
    <input name="password_confirmation" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-confirm-password" type="password" placeholder="Confirm Password" required>
  </div>
</div>

<div class="-mx-3 md:flex mb-2 mt-2">
    <div class="md:w-full px-3">
    <a class="text-sm text-gray-600 hover:text-gray-900" style="font-weight:700" href="{{ route('login') }}">
        {{ __("I'm Already A Member. Login Me In") }}
    </a>
</div>
    <div class="md:w-full px-3" style="background:blue;border-radius:6px;text-align:center;">
      <x-button class="ml-3" style="background:blue;border-radius:6px">
          {{ __('Create Account') }}
      </x-button>
      </div>

</div>

</div>

</form>
</div>


</x-guest-layout>
