def fun1()
    i=0
    while i<=2
        puts "fun1 #{Time.now} #{i}"
        sleep(1)
        i+=1
    end
end
def fun2()
    i=0
    while i<=2
        puts "fun2 #{Time.now} #{i}"
        sleep(2)
        i+=1
    end
end
puts "Start #{Time.now}"
t1=Thread.new{fun1}
t2=Thread.new{fun2}
t2.join
t1.join
puts "End #{Time.now}"