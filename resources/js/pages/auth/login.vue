<template>
  <div class="container-fluid" style="margin-top: 50px">
    <div class="row col-6 m-auto">
      <div class="col-lg-7 m-auto">
        <card class="mt-5 my-card" title="เข้าสู่ระบบ">
          <form @submit.prevent="login" @keydown="form.onKeydown($event)">
            <!-- Email -->
            <div class="mb-3 row">
              <label class="col-md-12 col-form-label">{{ $t("email") }}</label>
              <div class="col-md-12">
                <input
                  v-model="form.email"
                  :class="{ 'is-invalid': form.errors.has('email') }"
                  class="form-control"
                  type="email"
                  name="email"
                  placeholder="Enter Your Email"
                />
                <has-error :form="form" field="email" />
              </div>
            </div>

            <!-- Password -->
            <div class="mb-3 row">
              <label class="col-md-12 col-form-label">{{
                $t("password")
              }}</label>
              <div class="col-md-12">
                <input
                  v-model="form.password"
                  :class="{ 'is-invalid': form.errors.has('password') }"
                  class="form-control"
                  type="password"
                  name="password"
                  placeholder="Enter Your Password"
                />

                <has-error :form="form" field="password" />
              </div>
            </div>

            <!-- Remember Me -->
            <div class="mb-3 row">
              <div class="col-md-3" />
              <div class="col-md-12 d-flex">
                <checkbox v-model="remember" name="remember">
                  {{ $t("remember_me") }}
                </checkbox>

                <router-link
                  :to="{ name: 'password.request' }"
                  class="small ms-auto my-auto"
                >
                  {{ $t("forgot_password") }}
                </router-link>
              </div>
            </div>

            <div class="mb-3 row">
              <div class="col-md-12 d-flex">
                <!-- Submit Button -->
                <v-button class="w-100 cl-green" :loading="form.busy">
                  {{ $t("login") }}
                </v-button>

                <!-- GitHub Login Button -->
                <login-with-github />
              </div>
            </div>
          </form>
        </card>
      </div>
    </div>
  </div>
</template>

<script>
import Form from "vform";
import Cookies from "js-cookie";
import LoginWithGithub from "~/components/LoginWithGithub";

export default {
  components: {
    LoginWithGithub,
  },

  middleware: "guest",

  metaInfo() {
    return { title: this.$t("login") };
  },

  data: () => ({
    form: new Form({
      email: "",
      password: "",
    }),
    remember: false,
  }),

  methods: {
    async login() {
      // Submit the form.
      const { data } = await this.form.post("/api/login");

      // Save the token.
      this.$store.dispatch("auth/saveToken", {
        token: data.token,
        remember: this.remember,
      });

      // Fetch the user.
      await this.$store.dispatch("auth/fetchUser");

      // Redirect home.
      this.redirect();
    },

    redirect() {
      const intendedUrl = Cookies.get("intended_url");

      if (intendedUrl) {
        Cookies.remove("intended_url");
        this.$router.push({ path: intendedUrl });
      } else {
        this.$router.push({ name: "home" });
      }
    },
  },
};
</script>
<style lang="scss">
.my-card {
  .card-header {
    text-align: center;
  }
}
.cl-green {
  .btn .btn-primary {
    background: #56ab91;
  }
}
</style>
