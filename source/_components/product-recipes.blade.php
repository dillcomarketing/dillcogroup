{{-- recipes --}}
<section id="recipes" class="max-w-screen-xl-768 mx-auto px-6">
    <div class="flex flex-col lg:flex-row mb-2">
        <div class="mb-4 lg:mr-10">
            <h2 class="text-6xl md:text-8xl uppercase font-bold tracking-wide leading-none mb-4">Recipes</h2>
            <p class="text-justify text-sm leading-relaxed">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip

                ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulpu-
                tate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero

                eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                augue duis dolore te feugait nulla facilisi.
                Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                ex ea commodo consequat.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip

                ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulpu-
                tate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.
            </p>
        </div>
        <x-video-thumb size='large' buttonClasses="bg-{{ $accent }}" />
    </div>
    <div class="flex overflow-x-auto -mx-4 justify-between py-6">
        @for ($i = 0; $i < 4; $i++)
            <div class="m-4">
                <x-video-thumb buttonClasses="bg-{{ $accent }}" />
            </div>
        @endfor
    </div>
</section>
