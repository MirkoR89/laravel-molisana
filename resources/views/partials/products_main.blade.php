<main>
    <section class="pasta">
        <div class="container">
            <div class="pasta_card d-flex flex-wrap">
                @foreach ($data as $pasta)
                    @if ($pasta['tipo'] == 'lunga')
                        <div class="pasta_title">
                        
                        </div>
                        <img src=" {{ $pasta['src'] }} " alt="picture of pasta type">
                    @elseif ($pasta['tipo'] == 'corta')    
                        <div class="pasta_title">
                            
                        </div>
                        <img src=" {{ $pasta['src'] }} " alt="picture of pasta type">
                    @else
                        <div class="pasta_title">
                            
                        </div>
                        <img src=" {{ $pasta['src'] }} " alt="picture of pasta type">     
                    @endif
                @endforeach
            </div>
        </div>
    </section>
</main>