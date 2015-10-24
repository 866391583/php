Dir.foreach(Dir.pwd) do |n|
    puts "#{n}"
end
IO.foreach("trig.rb") do |n|
    puts "#{n}"
end
#File.rename("rb.trig","trig.rb")
a=File::exists?("trig.rb")
puts "#{a}"
t=Time.new
puts t.strftime("%Y-%m-%d %H:%M:%S")