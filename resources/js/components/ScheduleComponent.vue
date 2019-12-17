<template>
  <div>
    <label for="formGroupExampleInput">日付</label>
    <input
      type="date"
      min="2019-09-01"
      class="form-control col-3 rounded-pill"
      id="formGroupExampleInput"
      v-model="date"
      v-on:change="getAllData"
    />

    <div class="card my-3">
      <div class="card-header" v-bind="date">{{ date }}のスケジュール</div>
      <div class="card-group">
        <div v-if="release.length" class="card">
          <div class="card-body">
            <h5 class="card-title">上映情報</h5>
            <div v-for="item in release" class="list-group">
              <a href="./admin_movie_info.html" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <div class="media">
                    <img :src="item.image_url" width="50" class="mr-3" alt="..." />
                    <div class="media-body">
                      <h5 class="mt-0">{{ item.title }}</h5>
                      {{ item.screening_time }}
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="card" v-else>
          <div class="card-body">
            <h5 class="card-title">上映情報</h5>
            <p>上映情報はありません。</p>
          </div>
        </div>
        <div v-if="news.length" class="card">
          <div class="card-body">
            <h5 class="card-title">お知らせ情報</h5>
            <div v-for="item in news" class="list-group">
              <a
                href="./news_details.html"
                class="list-group-item list-group-item-action"
              >{{ item.title }}</a>
            </div>
          </div>
        </div>
        <div v-else class="card">
          <div class="card-body">
            <h5 class="card-title">お知らせ情報</h5>
            <p>お知らせはありません。</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a href="/admin/movie/create" class="btn btn-block btn-success">スケジュールを登録</a>
        </div>
        <div class="col">
          <a href="schedule_edit.html" class="btn btn-block btn-primary">スケジュールを編集</a>
        </div>
        <div class="col">
          <a href="/admin/news/add" class="btn btn-block btn-warning">お知らせ登録</a>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      date: "", // todo: 今日の日付が初期値
      release: [],
      news: []
    };
  },
  methods: {
    getScheduleByDate(date) {
      return axios
        .get("http://127.0.0.1:8000/api/admin/schedule/" + date)
        .then(response => (this.release = response.data))
        .finally(() => console.log(this.release));
    },
    getNewsByDate(date) {
      return axios
        .get("http://127.0.0.1:8000/api/admin/news/" + date)
        .then(response => (this.news = response.data))
        .finally(() => console.log(this.news));
    },
    getAllData(event) {
      var date = event.target.value;
      this.getScheduleByDate(date);
      this.getNewsByDate(date);
    }
  }
};
</script>