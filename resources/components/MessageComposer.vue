<template>
  <div>
    <input v-model="message" @keyup.enter="sendMessage" placeholder="Type a message">
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: ''
    };
  },
  methods: {
    sendMessage() {
      this.$emit('send-message', this.message);
      this.message = '';
    }
  }
};
</script>
