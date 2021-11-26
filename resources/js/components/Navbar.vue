<template>
  <div>
    <nav class="navbar navbar-light bg-light justify-content-between">
      <div class="container-fluid">
        <ul class="navbar-nav ms-auto">
          <li v-if="user" class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-dark"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <img
                :src="user.photo_url"
                class="rounded-circle profile-photo me-1"
              />
              {{ user.name }}
            </a>
            <div class="dropdown-menu">
              <router-link
                :to="{ name: 'settings.profile' }"
                class="dropdown-item ps-3"
              >
                <fa icon="cog" fixed-width />
                {{ $t("จักการบัญชี") }}
              </router-link>
              <div class="dropdown-divider" />
              <router-link :to="{ name: '' }" class="dropdown-item ps-3">
                <i class="fa fa-clipboard" aria-hidden="true"></i>
                {{ "ประวัตการซื้อ" }}
              </router-link>
              <div class="dropdown-divider" />
              <a href="#" class="dropdown-item ps-3" @click.prevent="logout">
                <fa icon="sign-out-alt" fixed-width />
                {{ $t("ออกจากระบบ") }}
              </a>
            </div>
          </li>
          <template v-else>
            <li class="nav-item">
              <router-link
                :to="{ name: 'login' }"
                class="nav-link"
                active-class="active"
              >
                {{ $t("login") }}
              </router-link>
            </li>
            <li class="nav-item">
              <router-link
                :to="{ name: 'register' }"
                class="nav-link"
                active-class="active"
              >
                {{ $t("register") }}
              </router-link>
            </li>
          </template>
        </ul>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="../home">
          <img src="/images/logo.png" width="150" />
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbar"
        >
          <span class="navbar-toggler-icon" />
        </button>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav m-auto">
            <!-- <locale-dropdown /> -->

            <!-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li> -->
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                สินค้า
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="../home">ทั้งหมด</a></li>
                <li><a class="dropdown-item" href="#">ต้นไม้ด่าง</a></li>
                <li><a class="dropdown-item" href="#">ต้นไม้ฟอกอากาศ</a></li>
                <li>
                  <a class="dropdown-item" href="#">ต้นไม้ประดับ</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">ต้นไม้มงคล</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >ปุ๋ยและอุปการณ์ดูแลต้นไม้</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">เปิดกล่องสุ่ม</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">เทียบขนาดต้นไม้</a>
            </li>
            <a
              href="../cart"
              class="py-2 px-3"
              style="border-radius: 25px;background: #82C3AB;"
            >
              <i class="fas fa-shopping-cart" style="color: white;"></i>
              <span
                class="py-1 px-3"
                style="border-radius: 25px; background: white;"
                >0</span
              >
            </a>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
import LocaleDropdown from "./LocaleDropdown";

export default {
  components: {
    LocaleDropdown
  },

  data: () => ({
    appName: window.config.appName
  }),

  computed: mapGetters({
    user: "auth/user"
  }),

  methods: {
    async logout() {
      // Log out the user.
      await this.$store.dispatch("auth/logout");

      // Redirect to login.
      this.$router.push({ name: "login" });
    }
  }
};
</script>

<style scoped>
.profile-photo {
  width: 2rem;
  height: 2rem;
  margin: -0.375rem 0;
}

.container {
  max-width: 1100px;
}
</style>
