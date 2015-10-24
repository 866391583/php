puts "hello world"
BEGIN{
    puts "begin"
}
def testBlock
    puts "testBlock"
    yield
end
testBlock{
    puts "in block"
}
END{
    puts "end"
}