<main>
    <section class="pasta">
        <div class="container">
            <div class="pasta_card d-flex flex-wrap">
                <div class="pasta_title">
                    <h2></h2>
                </div>
                @foreach ($data as $pasta)
                    @if ($pasta['tipo'] == 'lunga')
                        <div>   
                            <img src=" {{ $pasta['src'] }} " alt="picture of pasta type">
                            <div class="hover_card">
                                <span>{{ $pasta['titolo'] }}</span>
                                <p>{{ $pasta['descrizione'] }}</p>
                                <span>Tempo di cottura: {{ $pasta['cottura'] }}</span>
                            </div>
                        </div>
                    @elseif ($pasta['tipo'] == 'corta')    
                        <div>
                            <img src=" {{ $pasta['src'] }} " alt="picture of pasta type">
                            <div class="hover_card">
                                <span>{{ $pasta['titolo'] }}</span>
                                <p>{{ $pasta['descrizione'] }}</p>
                                <span>Tempo di cottura: {{ $pasta['cottura'] }}</span>
                            </div>
                        </div>
                    @else
                        <div>
                            <img src=" {{ $pasta['src'] }} " alt="picture of pasta type">     
                            <div class="hover_card">
                                <span>{{ $pasta['titolo'] }}</span>
                                <p>{{ $pasta['descrizione'] }}</p>
                                <span>Tempo di cottura: {{ $pasta['cottura'] }}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
</main>