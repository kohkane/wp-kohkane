<template>
  <svg :height="radius * 2" :width="radius * 2">
    <circle
      stroke="var(--brandPrimary)"
      fill="transparent"
      :stroke-dasharray="circumference + ' ' + circumference"
      :style="{ strokeDashoffset }"
      :stroke-width="stroke"
      :r="normalizedRadius"
      :cx="radius"
      :cy="radius"
    ></circle>
  </svg>
</template>

<script>
export default {
  props: {
    radius: Number,
    progress: Number,
    stroke: Number
  },
  data() {
    const normalizedRadius = this.radius - this.stroke * 2;
    const circumference = normalizedRadius * 2 * Math.PI;

    return {
      normalizedRadius,
      circumference,
      progressRingVal: 0
    };
  },
  mounted() {
    const interval = setInterval(() => {
      this.progressRingVal += 1;
      if (this.progress === this.progressRingVal) clearInterval(interval);
    }, 20);
  },
  computed: {
    strokeDashoffset() {
      return (
        this.circumference - (this.progressRingVal / 100) * this.circumference
      );
    }
  }
};
</script>

<style scoped>
.progress-ring__circle {
  transition: 0.35s stroke-dashoffset;
  transform: rotate(-90deg);
  transform-origin: 50% 50%;
}
</style>
