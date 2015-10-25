def fun
    $a=20
end
def upcase!(str)
    str.upcase!
end
fun
puts "#{$a}"
$Abc="hello"
$Abc=11
puts $Abc.class
puts 11/2
@@A=30
# puts defined(@@A)
a="hello"
upcase! a
puts a
a=Array[1,2,3,4,3,2,1]
a.each{|x| puts "hello #{x}"}
a.collect{|x| puts "hello #{x} #{x}"}