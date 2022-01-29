<template>
  <div>
    <div class="container">
      <div class="mt-3">
        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label"
            >หมวดหมู่(title)</label
          >
          <select
            name=""
            id=""
            class="form-control"
            v-model="form.category_id"
            required
          >
            <option value="">--- กรุณาเลือก1รายการ ---</option>
            <option :value="cat.id" v-for="cat in categories" :key="cat.id">
              {{ cat.name }}
            </option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label"
            >ชื่อสินค้า(title)</label
          >
          <input type="text" class="form-control" v-model="form.title" />
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label"
            >ข้อมูลสินค้า(description)</label
          >
          <input type="text" class="form-control" v-model="form.description" />
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label"
            >การดูแลรักษา(howto_description)</label
          >
          <input
            type="text"
            class="form-control"
            v-model="form.howto_description"
          />
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label">ราคา(price)</label>
          <input type="text" class="form-control" v-model="form.price" />
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label"
            >ราคาที่ลดกี่%(discount)</label
          >
          <input type="text" class="form-control" v-model="form.discount" />
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label"
            >เพิ่มรูปภาพ(image_url)</label
          >
          <input type="text" class="form-control" v-model="form.image_url" />
        </div>

        <button
          type="submit"
          class="btn btn-primary mt-3 w-100 text-center"
          @click="add()"
        >
          ยืนย้น
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import { mapActions, mapState } from "vuex";
export default {
  data: () => ({
    form: {
      category_id: "",
      title: "",
      description: "",
      howto_description: "",
      price: "",
      discount: "",
      image_url: "",
    },
  }),
  computed: {
    ...mapState("category", {
      categories: "items",
    }),
  },
  methods: {
    ...mapActions("category", {
      fetch: "index",
    }),
    async add() {
      const { data } = await axios.post("/api/products", this.form);

      this.$router.push({ name: "home" });
    },
  },
  async created() {
    await this.fetch();
  },
};
</script>
