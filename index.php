<?php
require("conexao.php");
include 'includes/header.php';




?>
<section class="hero">
    <h1>Descubra o mundo com a ATW Viagens Aereas</h1>
    <p>Voos domésticos e internacionais com conforto e excelência</p>
</section>

<section class="flight-search">
    <form action="search.php" method="get">
        <div class="search-tabs">
            <button type="button" class="active">Ida e Volta</button>
            <button type="button">Só Ida</button>
            <button type="button">Vários Destinos</button>
        </div>

        <div class="search-fields">
            <div class="field-group">
                <label for="origin">Origem</label>
                <input type="text" id="origin" name="origin" placeholder="Cidade ou aeroporto" required>
            </div>

            <div class="field-group">
                <label for="destination">Destino</label>
                <input type="text" id="destination" name="destination" placeholder="Cidade ou aeroporto" required>
            </div>

            <div class="field-group">
                <label for="departure">Ida</label>
                <input type="date" id="departure" name="departure" required>
            </div>

            <div class="field-group">
                <label for="return">Volta</label>
                <input type="date" id="return" name="return">
            </div>

            <div class="field-group passengers">
                <label for="passengers">Passageiros</label>
                <select id="passengers" name="passengers">
                    <option value="1">1 Adulto</option>
                    <option value="2">2 Adultos</option>
                    <option value="3">3 Adultos</option>
                    <option value="4">4 Adultos</option>
                </select>
            </div>
        </div>

        <button type="submit" class="search-button">Buscar Voos</button>
    </form>
</section>

<section class="promotions">
    <h2>Nossas Ofertas Especiais</h2>
    <div class="promo-cards">
        <div class="promo-card">
            <img src="imgs/Rio.jpg" alt="Rio de Janeiro">
            <h3>Rio de Janeiro</h3>
            <p>A partir de R$ 349</p>
        </div>
        <div class="promo-card">
            <img src="imgs/miami.jpg" alt="Miami">
            <h3>Miami</h3>
            <p>A partir de R$ 1.899</p>
        </div>
        <div class="promo-card">
            <img src="imgs/paris.jpg" alt="Paris">
            <h3>Paris</h3>
            <p>A partir de R$ 3.299</p>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
