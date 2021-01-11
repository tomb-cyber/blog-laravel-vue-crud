<footer class="relative-bottom d-flex justify-content-center bg-dark-blue ">
    @php
        $footerLinks = [
            'footer1' => '#',
            'footer2' => '#',
            'footer3' => '#',
         ];
    @endphp

        @foreach ($footerLinks as $name => $link) 
            @if ($loop->last) 
                <a class="custom-brown" href="{{ $link }}">{{ $name }}</a>
            @else
                <a class="custom-brown footer-border" href="{{ $link }}">{{ $name }}</a>
            @endif
        @endforeach
    
</footer>