<?php 
include 'includes/flights.php';
include 'includes/header.php';

$flight_id = $_GET['flight_id'] ?? 0;
$passengers = $_GET['passengers'] ?? 1;

// Find the selected flight
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
?>

        <section class="booking-form">
            <h2>Reserva de Voo</h2>
            
            <div class="flight-summary">
                <h3>Seu Voo</h3>
                <div class="summary-details">
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
                        <span class="label">Duração:</span>
                        <span><?php echo $selected_flight['duration']; ?> horas</span>
                    </div>
                    <div>
                        <span class="label">Passageiros:</span>
                        <span><?php echo $passengers; ?></span>
                    </div>
                    <div class="total-price">
                        <span class="label">Total:</span>
                        <span class="price">R$ <?php echo number_format($selected_flight['price'] * $passengers, 2, ',', '.'); ?></span>
                    </div>
                </div>
            </div>
            
            <form action="confirmation.php" method="post">
                <input type="hidden" name="flight_id" value="<?php echo $flight_id; ?>">
                <input type="hidden" name="passengers" value="<?php echo $passengers; ?>">
                
                <h3>Informações do Passageiro</h3>
                
                <?php for ($i = 1; $i <= $passengers; $i++): ?>
                    <div class="passenger-form">
                        <h4>Passageiro <?php echo $i; ?></h4>
                        <div class="form-group">
                            <label for="name<?php echo $i; ?>">Nome Completo</label>
                            <input type="text" id="name<?php echo $i; ?>" name="passengers[<?php echo $i; ?>][name]" required>
                        </div>
                        <div class="form-group">
                            <label for="cpf<?php echo $i; ?>">CPF</label>
                            <input type="text" id="cpf<?php echo $i; ?>" name="passengers[<?php echo $i; ?>][cpf]" required>
                        </div>
                        <div class="form-group">
                            <label for="birthdate<?php echo $i; ?>">Data de Nascimento</label>
                            <input type="date" id="birthdate<?php echo $i; ?>" name="passengers[<?php echo $i; ?>][birthdate]" required>
                        </div>
                    </div>
                <?php endfor; ?>
                
                <h3>Informações de Pagamento</h3>
                <div class="form-group">
                    <label for="card_number">Número do Cartão</label>
                    <input type="text" id="card_number" name="card_number" required>
                </div>
                <div class="form-group">
                    <label for="card_name">Nome no Cartão</label>
                    <input type="text" id="card_name" name="card_name" required>
                </div>
                <div class="form-group-row">
                    <div class="form-group">
                        <label for="card_expiry">Validade</label>
                        <input type="text" id="card_expiry" name="card_expiry" placeholder="MM/AA" required>
                    </div>
                    <div class="form-group">
                        <label for="card_cvv">CVV</label>
                        <input type="text" id="card_cvv" name="card_cvv" required>
                    </div>
                </div>
                
                <button type="submit" class="confirm-button">Confirmar Reserva</button>
            </form>
        </section>

<?php include 'includes/footer.php'; ?>