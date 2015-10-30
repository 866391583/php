def fun()
    puts "in fun"
    yield("test","test2")
end
puts "test block"
fun{ |var,var2| puts "hello world #{var} #{var2}"}
puts "end test block"
def formatArray()
    puts "begin format array"
    arr=%w{qwert yuiop asdfg hjkl zxcvb nm}
    arr.each{|var| yield var}
    puts "end format array"
end
formatArray do |var|
    puts "format array:=> #{var}"
end
class MyArray
    def initialize()
        @arr=%w{file edit selection find view goto tools project preferences help}
    end
    def testBlock()
        for i in @arr
            yield i
        end
    end
end
arr=MyArray.new
arr.testBlock{|var| puts "MyArray:=> #{var}"}