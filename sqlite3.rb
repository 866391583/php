require "sqlite3"
db=SQLite3::Database.new("ruby.db")
db.execute("drop table if exists user");
db.execute("create table user(name char(50),age int)")
20000.times do |count|
    db.execute("insert into user values('name',#{count})")
end
db.execute("update user set name='test'")
result=db.execute("select * from user");
result.each do |row|
    puts "#{row[0]}        #{row[1]}"
end