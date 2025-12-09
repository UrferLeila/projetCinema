<template>
  <div v-if="loading">
    <p>Chargement du film…</p>
  </div>

  <div v-else-if="error">
    <p>Erreur : {{ error }}</p>
  </div>

  <div class="header-container" v-else>
    <img class="img" :src="movie.image" alt="Poster" />

    <div>
      <h1 class="h1">Choisir une place</h1>

      <h2 class="h2-title">Film</h2>
      <h3 class="h3">{{ movie.titre }}</h3>

      <h2 class="h2-title">Date et Horaire</h2>
      <h3 class="h3">Mardi, 02.12.2025, 17h15</h3>

      <button class="btn-red reserved">Réserver</button>
    </div>

    <div class="selection-column">
      <h1 class="h1-center">Date</h1>
      <div class="header-center">
        <button class="btn reserved">Jeudi 4 décembre</button>
        <button class="btn reserved">Samedi 6 décembre</button>
        <button class="btn reserved">Lundi 8 décembre</button>
      </div>

      <h1 class="h1-center">Heure</h1>
      <div class="header-center">
        <button class="btn reserved">13h30</button>
        <button class="btn reserved">15h20</button>
        <button class="btn reserved">17h00</button>
        <button class="btn reserved">20h30</button>
      </div>
    </div>

    <div class="seats-wrapper">
      <div class="legend-container">
        <div class="legend-item">
          <div class="color normal"></div>
          <span>Normal (20CHF)</span>
        </div>
        <div class="legend-item">
          <div class="color vip"></div>
          <span>VIP (45CHF)</span>
        </div>
        <div class="legend-item">
          <div class="color selected"></div>
          <span>Votre choix</span>
        </div>
        <div class="legend-item">
          <div class="color occupied"></div>
          <span>Occupé</span>
        </div>
      </div>

      <div class="seats-container-small">
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
      </div>

      <div class="seats-container-small">
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-2.svg.svg"
        />
      </div>

      <div class="seats-container">
        <img
          class="svg"
          @click="handleClick"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
      </div>

      <div class="seats-container">
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
      </div>

      <div class="seats-container">
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
      </div>

      <div class="seats-container">
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
        <img
          class="svg"
          src="file:///C:/Users/cp-23leu/Pictures/cinema-seat-1.svg.svg"
        />
      </div>

      <div><h1 class="h1-center">Écran</h1></div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["id"],
  data() {
    return {
      isSelected: false,
      movie: null,
      loading: true,
      error: null,
    };
  },
  methods: {
    handleClick() {
      this.isSelected = !this.isSelected
    }
  },
  async mounted() {
    try {
      const response = await fetch(`/film/${this.id}`);
      if (!response.ok) throw new Error("Impossible de charger le film");
      const data = await response.json();
      this.movie = data;
    } catch (err) {
      console.error(err);
      this.error = err.message;
    } finally {
      this.loading = false;
    }
  },
};
</script>
