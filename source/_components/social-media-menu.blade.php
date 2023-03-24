<ul id="social-media-navigation" role="navigation" class="{{ $classes }}">
  <li class="hover:opacity-70 {{ $listClasses }}">
    <a href="https://www.linkedin.com/company/dillcogroup/" target="_blank">
      <x-icons.linkedin size="{{ $iconSize ?? 18 }}" />
    </a>
  </li>
  <li class="hover:opacity-70 {{ $listClasses }}">
    <a href="{{ $instagramLink ?? 'https://www.instagram.com/dillco.group/' }}" target="_blank">
      <x-icons.instagram size="{{ $iconSize ?? 18 }}" />
    </a>
  </li>
</ul>
