

## Domain Driven Design
![enter image description here](https://pluralsight2.imgix.net/paths/images/domain-driven-design-6d10f953a0.png)

First of all this article is my opinion about DDD if you have any suggestions I will be happy to add it with its resources this repo just a reference if I or anyone want a recap, understanding, quick read, or small implementation for  this architecture   so I want to start with the Conclusion to save your time with quick decision to  use this architecture or not

# Table of content

- Conclusion
- Introduction
- Folder structure
- Advantage & Disadvantage
- when & how to use it
- Resources

# Conclusion

DDD needs a

- Big and complex project .
- Large team with very code knowledge with software concepts
-  The software is not expected to grow rapidly  at the beginning
- When the time to deliver is not a concern
- Domain expert


DDD architecture modules your project and keeps separation of    concerns and keeps your business and software code aligned together    in **domain section** .

It may take you to over-engineering.

In the beginning, you will be confused about where to put code in which layer. keep in your mind there are no rules for implementation you know the concept and do it as your project needs.

Domain-Driven Design is a software development approach that tries to bring the business language and the source code as close as possible.

**The domain layer is the business logic**
For example in blog business, we have posts, comments, users and reactions so we have domains with the same names if the business says we have added reactions to comments and posts so we need 2 actions AddReactionToComment -- AddREactionToPost.

**The application layer is the entry point**
Controllers , Console and API.

**The infrastructure layer is the technical logic**
All domain interfaces implementation and the share point between domains

> All roads are roads to Granada :)
> That mean understand the concept about DDD and the can manage your own layers as you want

# introduction
Keep in your mind to focus on concept and understand the idea .

Domain-Driven Design is a software development approach that tries to bring the business language and the source code as close as possible.

Domain-Driven Design (DDD) is a software development approach that focuses on modeling the domain of the problem space in a way that is understandable and maintainable by both technical and non-technical stakeholders.

All definitions leads us to know the domain layer act as business logic

**Example**

business :i want to create order system that the client order a meal then the waiter receive it after it finished the client get notified  . daily , monthly and yearly reports

developer : create a 2 domains

    ├── Domain/
    │   ├── Order/
    │   │   ├── Actions/
    │   │   │   ├── CreateOrder.php
    │   │   │   ├── OrderFinished.php
    │   │   │   └── ...
    │   │   └── Events/
    │   │       ├── OrderCreated.php
    │   │       ├── OrderFinished.php
    │   │       └── ...
    │   ├── Report/
    │   │   └── Feature/
    │   │       ├── DailyReport.php
    │   │       ├── MonthlyReport.php
    │   │       └── ...
    │   └── ...


**So the business and software in the same line**

## DDD Layers

![enter image description here](https://learn.microsoft.com/en-us/dotnet/architecture/microservices/microservice-ddd-cqrs-patterns/media/ddd-oriented-microservice/ddd-service-layer-dependencies.png)

#### Application Layer
Application in Domain Driven Design is a layer that gonna process user input, and give user an output so this layer shouldn’t contains the whole of business logic of your applications.

This layer contains all the entry points of the application like controllers , commands , middleware etc .


![enter image description here](https://martinjoo.dev/_nuxt/img/applications.5c5829b.png)

#### Domain Layer
Domain Layer in Domain Driven Design is a layer that hold the whole of your business logic, so this layer like as heart of your application.

This layer contains all interfaces for all the project/domain and the guides for the project/domain
![enter image description here](https://martinjoo.dev/_nuxt/img/domains.c3c58a7.png)

#### Infrastructure Layer

Infrastructure Layer in Domain Driven Design is a layer that contains external services such as Database, Messaging System, and Email Services etc. So mainly this layer contains the whole external services logic.

This layer contains all implementation for the domain layer

This layer has many implementation .some resources says this layer contain tool like laravel or java sping that handle the infrastructure for this service. others say this layer contains the implementation for the domain layer and the gate to make domains contact with each other like if domain x needs a function from a common domain so he can deal with the infrastructure layer for communication

# Folder Structure
There are many solutions for this but you can choose or even create a new one as your business requirement as we agreed we focus on the concept so you can create your own

**Based on the 3 layers**

app/

├── Domain/

│   ├── Order/

│   │   ├── Order.php

│   │   ├── OrderRepository.php

│   │   ├── OrderService.php

│   │   ├── Events/

│   │   │   ├── OrderCreated.php

│   │   │   ├── OrderUpdated.php

│   │   │   └── ...

│   │   └── ValueObjects/

│   │       ├── OrderStatus.php

│   │       ├── OrderItem.php

│   │       └── ...

│   ├── Customer/

│   │   ├── Customer.php

│   │   ├── CustomerRepository.php

│   │   ├── CustomerService.php

│   │   ├── Events/

│   │   │   ├── CustomerCreated.php

│   │   │   ├── CustomerUpdated.php

│   │   │   └── ...

│   │   └── ValueObjects/

│   │       ├── Name.php

│   │       ├── Email.php

│   │       └── ...

│   └── ...

├── Infrastructure/

│   ├── Persistence/

│   │   ├── Repositories/

│   │   │   ├── EloquentOrderRepository.php

│   │   │   ├── EloquentCustomerRepository.php

│   │   │   └── ...

│   │   └── Migrations/

│   │       ├── 2021_01_01_create_orders_table.php

│   │       ├── 2021_01_02_create_customers_table.php

│   │       └── ...

│   ├── Messaging/

│   │   ├── EventHandlers/

│   │   │   ├── OrderCreatedHandler.php

│   │   │   ├── CustomerCreatedHandler.php

│   │   │   └── ...

│   │   └── ...

│   ├── Services/

│   │   ├── PaymentService.php

│   │   ├── ShippingService.php

│   │   └── ...

│   └── ...

└── Application/

    ├── Http/

    │   ├── Controllers/

    │   │   ├── OrderController.php

    │   │   ├── CustomerController.php

    │   │   └── ...

    │   └── ...

    ├── Console/

    │   ├── Commands/

    │   │   ├── ProcessOrdersCommand.php

    │   │   ├── SendEmailCommand.php

    │   │   └── ...

    │   └── ...

    ├── Views/

    │   ├── orders/

    │   ├── customers/

    │   └── ...

    ├── Providers/

    │   ├── AppServiceProvider.php

    │   ├── DomainServiceProvider.php

    │   ├── InfrastructureServiceProvider.php

    │   └── ...

    └── ...


**other one based on domain layer**  ( Domain oriented)

app/Domain/Invoices/

    ├── Aildctions
    
    ├── QueryBuers
    
    ├── Collections
    
    ├── DataTransferObjects
    
    ├── Events
    
    ├── Exceptions
    
    ├── Listeners
    
    ├── Models
    
    ├── Rules
    
    └── States

app/Application/Admin/

    ├── Controllers
    
    ├── Middlewares
    
    ├── Requests
    
    ├── Resources
    
    └── ViewModels


# Advantage & Disadvantage

## Advantage

- **Simpler communication**
- **More flexibility**
- **The domain is more important than UI/UX**
- **decoupling**
- **Modularizing**

## Disadvantage

- **Deep domain knowledge is needed**
- **Contains repetitive practices** :Although many would say this is an advantage, the domain-driven design contains many repetitive practices. DDD encourages the use of continuous integration to build strong applications that can adapt themselves when necessary. Many organizations may have difficulties with these methods. More particularly, if their previous experience is generally tied to less-flexible models of growth, like the waterfall model.
-    **It might not work best for highly-technical projects.** Domain-driven design is perfect for applications that have complex business logic. However, it might not be the best solution for applications with minor domain complexity but high technical complexity. Applications with great technical complexity can be very challenging for business-oriented domain experts. This could cause many limitations that might not be solvable for all team members.
-   **Complexity**: DDD can be a complex approach to software development, as it requires a deep understanding of the business domain and the ability to model it effectively. This can make it more challenging to implement than other architectural styles.

- **Overengineering**:  DDD  can sometimes lead to overengineering, where developers spend too much time designing elaborate domain models that are more complex than necessary. This can lead to increased development time and costs.

- **Team expertise**: DDD requires a team of developers who are skilled in both software development and the business domain. It can be difficult to find developers with the necessary expertise, which can make it challenging to implement effectively.

- **Learning curve**: DDD can have a steep  learning  curve, especially for developers who are not already familiar with the approach. This can result in a longer ramp-up period for new team members.

- **Performance overhead**: DDD can sometimes introduce performance overhead, particularly if the  domain model  is complex or if there are many interactions between domains. This can impact the system's overall performance.

# When & How to use

## When
If you have a
- A large project with a good team in size and quality
- Clear business logic with domain expert
- Project should have  maintainability, Scalability and Flexibility
- Time is not a factor


## How
- Understand the business domain .
- Define domain models.
- Define domain services : this section may be repository and service classes or repository and actions like LARAVEL ACTION.
- testing

# Resources

- https://stitcher.io/blog/laravel-beyond-crud-01-domain-oriented-laravel
- https://martinjoo.dev/domain-driven-design-with-laravel-domains-and-applications
- https://github.com/Orphail/laravel-ddd
- https://www.hibit.dev/posts/43/domain-driven-design-with-laravel-9
- https://lorisleiva.com/conciliating-laravel-and-ddd
- https://medium.com/microtica/the-concept-of-domain-driven-design-explained-3184c0fd7c3f
- https://koalafacade.github.io/
- https://learn.microsoft.com/en-us/dotnet/architecture/microservices/microservice-ddd-cqrs-patterns/ddd-oriented-microservice
