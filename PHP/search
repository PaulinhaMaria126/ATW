<?php 
include 'includes/flights.php';
include 'includes/header.php';

$origin = $_GET['origem'] ?? '';
$destination = $_GET['destino'] ?? '';
$departure = $_GET['partida'] ?? '';
$return = $_GET['retorno'] ?? '';
$passengers = $_GET['passageiros'] ?? 1;

$filtered_flights = array_filter($flights_data, function($flight) use ($origin, $destination, $departure) {
    $origin_match = empty($origin) || stripos($flight['origin'], $origin) !== false;
    $destination_match = empty($destination) || stripos($flight['destination'], $destination) !== false;
    $date_match = empty($departure) || $flight['departure_date'] === $departure;
    
    return $origin_match && $destination_match && $date_match;
});
?>

        <section class="search-results">
            <h2>Voos disponíveis de <?php echo htmlspecialchars($origin); ?> para <?php echo htmlspecialchars($destination); ?></h2>
            <?php if (!empty($departure)): ?>
                <p class="search-date"><?php echo date('d/m/Y', strtotime($departure)); ?></p>
            <?php endif; ?>
            
            <div class="results-container">
                <?php if (count($filtered_flights) > 0): ?>
                    <?php foreach ($filtered_flights as $flight): ?>
                        <div class="flight-card">
                            <div class="flight-info">
                                <div class="flight-times">
                                    <span class="time"><?php echo $flight['departure_time']; ?></span>
                                    <span class="airport"><?php echo htmlspecialchars($flight['origin']); ?></span>
                                </div>
                                <div class="flight-duration">
                                    <div class="duration-line"></div>
                                    <span><?php echo $flight['duration']; ?>h</span>
                                </div>
                                <div class="flight-times">
                                    <span class="time"><?php echo $flight['arrival_time']; ?></span>
                                    <span class="airport"><?php echo htmlspecialchars($flight['destination']); ?></span>
                                </div>
                                <div class="flight-number">
                                    <span>Voo <?php echo $flight['flight_number']; ?></span>
                                </div>
                            </div>
                            <div class="flight-price">
                                <span class="price">R$ <?php echo number_format($flight['price'], 2, ',', '.'); ?></span>
                                <span class="price-detail">por passageiro</span>
                                <a href="booking.php?flight_id=<?php echo $flight['id']; ?>&passengers=<?php echo $passengers; ?>" class="book-button">Selecionar</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="no-results">
                        <p>Não encontramos voos disponíveis para os critérios selecionados.</p>
                        <a href="index.php" class="back-button">Nova busca</a>
                    </div>
                <?php endif; ?>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
