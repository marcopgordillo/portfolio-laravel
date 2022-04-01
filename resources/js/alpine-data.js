document.addEventListener('alpine:init', () => {
  Alpine.data('contact', () => ({
    formData: {
      name: '',
      email: '',
      message: '',
    },
    errors: {},
    successMessage: '',
    async submitForm(event) {
      this.successMessage = '';
      this.errors = {};
      try {
        const response = await fetch(`/contact/submit`, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector(`meta[name='csrf-token']`).getAttribute('content')
          },
          body: JSON.stringify(this.formData)
        })

        if (response.status !== 200) throw response

        const data = await response.json()
        this.formData = {
          name: '',
          email: '',
          message: '',
        };
        if (data?.success){
          this.successMessage = data.message;
        }
      } catch (e) {
        if (e.status === 422) {
          const data = await e.json()
          this.errors = data.errors;
        }
      }
    }
  }))
})
