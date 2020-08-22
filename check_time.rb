# https://docs.ruby-lang.org/ja/latest/class/Time.html

st_t = Time.new(2020,8,21,23,59)
p st_t

check_t = Time.new(2020,8,21,23,59,30)
p (st_t < check_t)

