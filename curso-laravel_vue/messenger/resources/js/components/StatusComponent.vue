<template>
  <b-img rounded="circle" blank width="10" height="10"
    :blank-color="online ? 'green' : 'red'"
    :title="online ? 'Conectado' : 'Desconectado'"
    alt="img" class="m-1" />
</template>

<script>
export default {
  props: {
      online: Boolean
  },
  data() {
      return {
      };
  },
  mounted() {
  }

}
</script>
