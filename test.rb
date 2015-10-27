class A
    attr_accessor :name,:age
    @@count=50
    def initialize()
        @name="hello"
        @age=20
        puts "initialize"
    end
    def getName()
        return @name
    end
end
a=A.new()
puts a.name
puts a.age
a.name="hello2"
puts a.getName
puts a.count