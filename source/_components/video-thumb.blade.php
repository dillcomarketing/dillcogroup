<div class="relative {{ $size == 'large' ? 'w-96 h-96' : 'w-72 h-72' }} flex-grow-0 flex-shrink-0 bg-white">
    <div class="flex items-center justify-center w-full h-full absolute">
        <div class="flex items-center justify-center {{ $size == 'large' ? 'w-24 h-24' : 'w-20 h-20' }} {{ $buttonClasses ?? 'bg-black' }} rounded-full cursor-pointer hover:opacity-80 shadow-lg">
            <div class="ml-1">
                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="white"
                    width="{{ $size == 'large' ? 48 : 32 }}"
                    height="{{ $size == 'large' ? 48 : 32 }}"
                    viewBox="0 0 24 24">
                    <path d="M3 22v-20l18 10-18 10z" />
                </svg>
            </div>
        </div>
    </div>
</div>
