<template>
  <div class="modal-overlay">
    <div class="modal details-modal">
      <h2 class="h1-center">Résumé</h2>
      <p class="subtitle">Voici le récapitulatif de votre réservation.</p>

      <div class="details-section">
        <span class="label">Film</span>
        <span class="value">{{ selectedMovie.titre }}</span>
      </div>

      <div class="details-section">
        <span class="label">Date et horaire</span>
        <span class="value">{{ selectedSeance }}</span>
      </div>

      <div class="details-section">
        <span class="label">Nombre de places</span>
        <span class="value">{{ selectedSeats.length }}</span>
      </div>

      <div class="details-section">
        <span class="label">Sièges réservés</span>
<span class="value">{{ seatNames.join(", ") }}</span>
      </div>

      <div class="total">
        <span>Total</span>
        <strong>{{ totalPrice }} CHF</strong>
      </div>

      <div class="modal-actions">
        <button class="btn-red">Confirmer</button>
        <button class="btn-red" @click="$emit('close')">Annuler</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    selectedMovie: { type: Object, required: true },
    selectedSeance: { type: String, required: true },
    selectedSeats: { type: Array, required: true }, // Array of seat objects
  },
  computed: {
    seatNames() {
      return this.selectedSeats.map((seat) => seat.nom);
    },
    totalPrice() {
      const priceMap = {
        normal: 20,
        vip: 45,
      };
      return this.selectedSeats.reduce((sum, seat) => {
        const type = seat.prix_type || seat.prix?.type || "normal";
        return sum + (priceMap[type] || 0);
      }, 0);
    },
  },
};
</script>
