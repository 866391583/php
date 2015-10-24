$LOAD_PATH << "."
require "trig"
puts "hello world"
BEGIN{
    puts "begin"
}
def testBlock
    puts "testBlock"
    include Trig
    puts Trig::PI
    puts Trig.sin(Trig::PI/6)
    yield
end
testBlock{
    puts "in block"
    include Exp
    puts Exp::E
    puts Exp.abs(-2*Exp::E)

}
END{
    puts "end"
}