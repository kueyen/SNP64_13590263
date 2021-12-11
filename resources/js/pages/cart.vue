<template>
  <div class="container">
    <div><h3 class="text-center mt-5">ตระกร้าสินค้า</h3></div>

    <div class="mt-5">
      <hr />
      <i class="fas fa-map-marker-alt"></i>
      <h6>ที่อยู่จัดส่ง</h6>
    </div>
    <div class="clearfix mt-3">
      <div class="float-start">
        <h4>พลอย พิเศษ 56/7 หมู่ 124 สามพระยา ชะอำ เพชรบุรี, 76120</h4>
      </div>
      <div class="float-end">
        <i class="far fa-edit">แก้ไข</i>
      </div>
    </div>
    <hr class="mt-5" />
    <div class="container">
      <div class="row row-cols-6">
        <div class="col">รายการสั่งซื้อสินค้า</div>
        <div class="col"></div>
        <div class="col">ราคาต่อหน่วย</div>
        <div class="col">จำนวน</div>
        <div class="col">รายการย่อย</div>
        <div class="col"></div>
      </div>
      <div class="clearfix mt-5">
        <div class="float-start"><i class="fas fa-store"></i></div>
        <h4>ร้านแม่พันธ์ุไม้ไทย</h4>
      </div>
      <div v-for="(item, i) in cart" :key="i" class="row row-cols-6 mt-5">
        <div class="col">
          <img class="w-100" :src="item.image_url" />
        </div>
        <div class="col">ต่นเงินไหลมาด่างชมพู</div>
        <div class="col">{{ item.price }} ฿</div>
        <div class="col">{{ item.amount }}</div>
        <div class="col">{{ item.sum }} ฿</div>
        <div class="col"><i class="fas fa-trash"></i></div>
      </div>
      <hr />
      <div class="mt-3">
        <div class="clearfix">
          <div class="float-start">
            <div class="row row-cols-3">
              <div class="col"><h4>วิธีการชำระเงิน</h4></div>
              <div class="col">
                <button class="py-1 px-5 btn btn-outline-primary" type="button">
                  บัตรเครดิต/บัตรเดบิต
                </button>
              </div>
              <div class="col">
                <button class="py-1 px-5 btn btn-outline-primary" type="button">
                  โอน/ชำระผ่านบัญชีธนาคาร
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="py-2 px-3 mt-3" style="background: #82c3ab">
          <div class="clearfix">
            <div class="float-start">
              <h3 class="text-white">ยอดสั่งซื้อทั้งหมด</h3>
            </div>
            <div class="float-end">
              <h3 class="text-white">{{ "2,260" }} ฿</h3>
            </div>
          </div>
        </div>
        <div class="clearfix mt-3">
          <div class="float-end">
            <button
              @click="showAlert"
              type="button"
              class="py-3 px-5 btn btn-success btn-lg"
              onclick="Swal.fire();"
            >
              ชำระเงิน
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  middleware: "auth"
  data: () => ({
    cart: [
      {
        image_url: "/images/hd1080.png",
        price: "180",
        amount: "1",
        sum: "790"
      },
      {
        image_url: "/images/hd1080.png",
        price: "180",
        amount: "1",
        sum: "790"
      },
      {
        image_url: "/images/hd1080.png",
        price: "180",
        amount: "1",
        sum: "790"
      },
      {
        image_url: "/images/hd1080.png",
        price: "180",
        amount: "1",
        sum: "790"
      },
      {
        image_url: "/images/hd1080.png",
        price: "180",
        amount: "1",
        sum: "790"
      },
      {
        image_url: "/images/hd1080.png",
        price: "180",
        amount: "1",
        sum: "790"
      },
    ],
  }),
  methods: {
    showAlert() {
      this.$swal({
        icon: "success",
        title: "สำเร็จ",
        showConfirmButton: false,
        timer: 1500
      });
    },
  },

  metaInfo() {
    return { title: "cart" };
  },
};
</script>

<style></style>
