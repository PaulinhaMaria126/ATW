<?php 
include 'includes/flights.php';
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit();
}

$flight_id = $_POST['flight_id'];
$passengers = $_POST['passengers'];
$passenger_data = $_POST['passengers'];
$card_number = substr($_POST['card_number'], -4);

$selected_flight = null;
foreach ($flights_data as $flight) {
    if ($flight['id'] == $flight_id) {
        $selected_flight = $flight;
        break;
    }
}

if (!$selected_flight) {
    header("Location: index.php");
    exit();
}

$booking_ref = 'ATW' . strtoupper(substr(uniqid(), -8));
?>

        <section class="confirmation">
            <div class="confirmation-header">
                <img src="imgs/checkmark.png" alt="Confirmação">
                <h2>Reserva Confirmada!</h2>
                <p class="booking-ref">Número da reserva: <strong><?php echo $booking_ref; ?></strong></p>
            </div>
            
            <div class="confirmation-details">
                <h3>Detalhes do Voo</h3>
                <div class="details-grid">
                    <div>
                        <span class="label">Origem:</span>
                        <span><?php echo htmlspecialchars($selected_flight['origin']); ?></span>
                    </div>
                    <div>
                        <span class="label">Destino:</span>
                        <span><?php echo htmlspecialchars($selected_flight['destination']); ?></span>
                    </div>
                    <div>
                        <span class="label">Data:</span>
                        <span><?php echo date('d/m/Y', strtotime($selected_flight['departure_date'])); ?></span>
                    </div>
                    <div>
                        <span class="label">Horário:</span>
                        <span><?php echo $selected_flight['departure_time']; ?></span>
                    </div>
                    <div>
                        <span class="label">Número do Voo:</span>
                        <span><?php echo $selected_flight['flight_number']; ?></span>
                    </div>
                    <div>
                        <span class="label">Passageiros:</span>
                        <span><?php echo $passengers; ?></span>
                    </div>
                    <div>
                        <span class="label">Forma de Pagamento:</span>
                        <span>Cartão de Crédito terminando em <?php echo $card_number; ?></span>
                    </div>
                    <div class="total-price">
                        <span class="label">Total Pago:</span>
                        <span class="price">R$ <?php echo number_format($selected_flight['price'] * $passengers, 2, ',', '.'); ?></span>
                    </div>
                </div>
            </div>
            
            <div class="passenger-list">
                <h3>Passageiros</h3>
                <ul>
                    <?php foreach ($passenger_data as $passenger): ?>
                        <li><?php echo htmlspecialchars($passenger['name']); ?> (CPF: <?php echo htmlspecialchars($passenger['cpf']); ?>)</li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="confirmation-actions">
                <a href="#" class="button">Imprimir Comprovante</a>
                <a href="index.php" class="button secondary">Voltar ao Início</a>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>