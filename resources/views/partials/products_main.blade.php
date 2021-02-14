<main>
    <section class="pasta">
        <div class="container">
            <div class="pasta_card d-flex flex-wrap">
                @foreach ($data as $key => $pasta)
                @if ($pasta['tipo'] == 'lunga')
                @if ($loop->first)
                <div class="pasta_title">
                    <h2>le lunghe</h2>
                </div>
                @endif
                <div class="info_card">
                    <img src=" {{ $pasta['src'] }} " alt="picture of pasta type">
                    <div class="hover_card text-center">
                        <h3>{{ $pasta['titolo'] }}</h3>
                        <p>{{ $pasta['descrizione'] }}</p>
                        <span>Tempo di cottura: {{ $pasta['cottura'] }}</span>
                    </div>
                </div>
                @elseif ($pasta['tipo'] == 'corta')
                @if ($pasta['tipo'] == 'corta' && $pasta['titolo'] == 'N.38 Mezze maniche' )
                <div class="pasta_title">
                    <h2>le corte</h2>
                </div>
                @endif
                <div>
                    <img src=" {{ $pasta['src'] }} " alt="picture of pasta type">
                    <div class="hover_card text-center">
                        <h3>{{ $pasta['titolo'] }}</h3>
                        <p>{{ $pasta['descrizione'] }}</p>
                        <span>Tempo di cottura: {{ $pasta['cottura'] }}</span>
                    </div>
                </div>
                @else
                @if ($loop->last)
                <div class="pasta_title">
                    <h2>le cortissime</h2>
                </div>
                @endif
                <div>
                    <img src=" {{ $pasta['src'] }} " alt="picture of pasta type">
                    <div class="hover_card text-center">
                        <h3>{{ $pasta['titolo'] }}</h3>
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
