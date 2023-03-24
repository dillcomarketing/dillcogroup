<footer id="contact" class="max-w-screen-xl-768 mx-auto py-8 px-6 bg-white text-gray-900">
  <div class="flex flex-col md:flex-row justify-between">
    <div class="flex flex-wrap mb-6 md:mb-0 items-center md:max-w-lg">
      <img src="/assets/images/qr-code-2.png" class="mr-8">
      <h2 class="text-xl md:text-4xl font-semibold uppercase tracking-wider mb-2 md:mb-6 flex-1">Our Full Catalogue</h2>
    </div>
    <div class="md:max-w-sm md:text-right">
      <div class="mb-6">
        <h2 class="text-4xl font-semibold uppercase tracking-wider">Phone</h2>
        <span class="text-lg font-semibold">+62 811-2233-3761</span>
      </div>
      <div class="mb-6">
        <h2 class="text-4xl font-semibold uppercase tracking-wider">Office</h2>
        <span class="text-sm font-semibold">Jl. Yupiter Utama No. 106, Bandung 40286</span>
      </div>
      <x-social-media-menu iconSize="32" classes="md:justify-end flex" listClasses="mr-3" instagramLink="{{ $instagramLink ?? 'https://www.instagram.com/dillco.group/' }}" />
    </div>
  </div>
</footer>
