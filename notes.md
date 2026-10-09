        <!-- @dump($greeting)         -->
         <!-- @if($greeting)
         <p> we have greeting man {{ $greeting }}</p>
         @endif -->

         <!--
         @unless
         @foreach
         @while
          -->

        @foreach ($tasks ?? [] as $t)
        <li> {{ $t }}</li>

        @endforeach


