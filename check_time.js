
/*
https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Date
* */
console.log("test");

// 月は0基点
const st_t = new Date(2020, 8-1, 21, 23, 59);
console.log(st_t.toLocaleString("ja"));

const check_t = new Date(2020, 8-1, 21, 23, 59, 30);
console.log(st_t < check_t);